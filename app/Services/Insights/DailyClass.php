<?php

namespace App\Services\Insights;

use App\Models\Tsr;
use App\Models\TsrSample;
use App\Models\TsrAnalysis;
use App\Models\AgencyConfiguration;
use App\Models\ListLaboratory;

class DailyClass
{
    public function __construct()
    {
        $this->agency = (count(\Auth::user()->myroles) > 0) ? \Auth::user()->myroles[0]->agency_id : null;
        $this->ids =(\Auth::check()) ? (\Auth::user()->role == 'Administrator') ? [] : AgencyConfiguration::where('agency_id',$this->agency)->value('laboratories') : '';
    }

    public function laboratories($request){
        $date = ($request->date) ? $request->date : now();
        $lab_id = ($this->ids) ? array_column($this->ids, 'value') : null;
        $laboratories = ListLaboratory::whereIn('id', $lab_id)->get();
        
        $lists = []; $requests_total = 0; $samples_total = 0; $analyses_total = 0; $fees_total = 0; $gratis_total = 0; $discount_total = 0; $gross_total = 0;
        
        foreach($laboratories as $laboratory){
            $req = Tsr::where('status_id','!=',5)
            ->whereDate('created_at',$date)
            ->where('laboratory_id',$laboratory->id)->where('agency_id',$this->agency)->count();

            $sample  = TsrSample::whereDate('created_at',$date)
            ->whereHas('tsr', function ($query) use ($laboratory){
                $query->where('laboratory_id',$laboratory->id)->where('agency_id',$this->agency)->where('status_id','!=',5);
            })->count();

            $analysis = TsrAnalysis::whereDate('created_at',$date)
            ->whereHas('sample', function ($query) use ($laboratory){
                $query->whereHas('tsr', function ($query) use ($laboratory){
                    $query->where('laboratory_id',$laboratory->id)->where('agency_id',$this->agency)->where('status_id','!=',5)->where('is_shelf',0);
                });
            })->count();

            $gtotal = Tsr::whereDoesntHave('parent')
            ->withWhereHas('payment', function ($query) {
                $query->where('is_free',0);
            })
            ->where('status_id','!=',5)
            ->whereDate('created_at',$date)
            ->where('laboratory_id',$laboratory->id)->where('agency_id',$this->agency)
            ->get()
            ->sum(function ($tsr) {
                return str_replace(['₱ ', '₱', ',', ' '], '', $tsr->payment->total);
            });

            $gdiscount = Tsr::whereDoesntHave('parent')
            ->withWhereHas('payment', function ($query) {
                $query->where('is_free',0);
            })
            ->where('status_id','!=',5)
            ->whereDate('created_at',$date)
            ->where('laboratory_id',$laboratory->id)->where('agency_id',$this->agency)
            ->get()
            ->sum(function ($tsr) {
                return str_replace(['₱ ', '₱', ',', ' '], '', $tsr->payment->discount);
            });

            $ggratis = Tsr::whereDoesntHave('parent')
            ->withWhereHas('payment', function ($query) {
                $query->where('is_free',1);
            })
            ->where('status_id','!=',5)
            ->whereDate('created_at',$date)
            ->where('laboratory_id',$laboratory->id)->where('agency_id',$this->agency)
            ->get()
            ->sum(function ($tsr) {
                return str_replace(['₱ ', '₱', ',', ' '], '', $tsr->payment->discount);
            });
           
            $lists[] = [
                $laboratory->name,
                $req,
                $sample,
                $analysis,
                '₱'.number_format($gtotal),
                '₱'.number_format($ggratis),
                '₱'.number_format($gdiscount),
                '₱'.number_format($gtotal + $ggratis + $gdiscount),
                $laboratory->id,
            ];

            $requests_total += $req;
            $samples_total += $sample;
            $analyses_total += $analysis;
            $fees_total += $gtotal;
            $gratis_total += $ggratis;
            $discount_total += $gdiscount;
            // $gross_total += (($total+$contract+$pending+$wallet) + $gratis + $discount);
            $gross_total += ($gtotal + $ggratis + $gdiscount);
        }
        $footer[] = [
            'Total',$requests_total, $samples_total, $analyses_total, '₱'.number_format($fees_total), '₱'.number_format($gratis_total), '₱'.number_format($discount_total), '₱'.number_format($gross_total)
        ];
        return [
            'lists' => $lists,
            'footer' => $footer
        ];
    }
}
