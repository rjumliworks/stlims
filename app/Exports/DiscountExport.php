<?php

namespace App\Exports;

use App\Models\Tsr;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DiscountExport implements FromView
{
    protected $year,$agency,$discount;

    function __construct($year,$agency,$discount) {
        $this->year = $year;
        $this->agency = $agency;
        $this->discount = $discount;
    }

    public function view(): View {
        $lists = Tsr::select('id','code','customer_id')
        ->whereDoesntHave('parent')
        ->with('customer:id,name,name_id','customer.customer_name:id,name','customer.address:address,customer_id,region_code,province_code,municipality_code,barangay_code','customer.address.region:code,name,region','customer.address.province:code,name','customer.address.municipality:code,name','customer.address.barangay:code,name')
        ->withWhereHas('payment', function ($query) {
            $query->where('discount_id',$this->discount);
            $query->select('tsr_id','or_number','total','subtotal','discount','status_id','payment_id')->with('status','type');
        })

        ->where('agency_id',$this->agency)
        ->whereYear('created_at',$this->year)
        ->get();
        $tsrs = [];

        foreach ($lists as $row) {
            $name = ($row['customer']['name'] == 'Main') ? '' : ' - '.$row['customer']['name'];
            $customer = $row['customer']['customer_name']['name'].$name;

            $address = ($row['customer']['address']['address'] != '' ||$row['customer']['address']['address'] != NULL) ? $row['customer']['address']['address'].', ' : '';
            if($row['customer']['address']['municipality']['name'] == 'Zamboanga City' || $row['customer']['address']['municipality']['name'] == 'Isabela City'){
                $a = '';
            }else if($row['customer']['address']['province']['name'] == 'Sulu'){
                $a = ', '.$row['customer']['address']['province']['name'];
            }else{
                $a = ', '.$row['customer']['address']['province']['name'];
            }
       
            $completed_address = $address.$row['customer']['address']['barangay']['name'].', '.$row['customer']['address']['municipality']['name'].$a;

            $tsrs[] = [
                "reference_no" => $row['code'],
                "customer" => $customer,
                "address" => $completed_address,
                "total_fees" => $row['payment']['subtotal'],
                "discount" => ($row['payment']['discount'] == '₱0.00') ? '-' : $row['payment']['discount'],
                "ornumber" => ($row['payment']['or_number']) ? $row['payment']['or_number'] : '-',
                "amount" => $row['payment']['total'],
                "status" => $row['payment']['status']['name'],
                "payment" => ($row['payment']['type']) ?  $row['payment']['type']['name'] : '-'
            ];
        }

        return view('exports.rstl', [
            'lists' => $tsrs
        ]);
    }
}
