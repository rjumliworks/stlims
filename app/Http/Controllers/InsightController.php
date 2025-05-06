<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Insights\TopClass;
use App\Services\Insights\DailyClass;
use App\Services\Insights\CustomerClass;
use App\Services\Insights\PaymentClass;
use App\Services\Insights\LaboratoryClass;
use App\Services\Insights\GadClass;

class InsightController extends Controller
{
    public function __construct(CustomerClass $customer, LaboratoryClass $laboratory, DailyClass $daily, TopClass $top, PaymentClass $payment, GadClass $gad){
        $this->top = $top;
        $this->customer = $customer;
        $this->laboratory = $laboratory;
        $this->daily = $daily;
        $this->payment = $payment;
        $this->gad = $gad;
    }

    public function index(Request $request){
        switch($request->option){
            case 'daily':
                return $this->daily->laboratories($request);
            break;
            case 'tops':
                return [
                    'samples' => $this->top->samples($request),
                    'analyses' => $this->top->analyses($request),
                    'customers' => $this->top->customers($request)
                ];
            break;
            case 'customer-chart':
                return $this->customer->chart($request);
            break;
            case 'customers':
                return [
                    'industries' => $this->customer->industries($request),
                    'purposes' => $this->customer->purposes($request),
                    'discounts' => $this->customer->discounts($request),
                    'tsrs' => $this->customer->tsrs($request),
                    'total_tsrs' => $this->customer->total_tsrs($request),
                    'spenders' => $this->customer->spenders($request),
                    'location' => $this->customer->location($request),
                    'info' => $this->customer->info($request),
                    'info2' => $this->customer->info2($request),
                    'industriesfirm' => $this->customer->industryfirm($request),
                    'purposesfirm' => $this->customer->purposefirm($request),
                    'breakdowns' => $this->customer->breakdowns($request),
                    'genders' => $this->customer->gender($request)
                ];
            break;
            case 'customers-excel':
                return $this->customer->excel($request);
            break;
            case 'customers-info':
                switch($request->type){
                    case 'industry':
                        return $this->customer->industry($request);
                    break;
                    case 'purpose':
                        return $this->customer->purpose($request);
                    break;
                    case 'discount':
                        return $this->customer->discount($request);
                    break;
                }
            break;
            case 'laboratory-chart':
                return $this->laboratory->chart($request);
            break;
            case 'laboratories':
                return [
                    'info' => $this->laboratory->info($request),
                    'info2' => $this->laboratory->info2($request),
                    'tsrs' => $this->laboratory->tsrs($request),
                    'earnings' => $this->laboratory->earnings($request),
                    'gratis' => $this->laboratory->gratis($request),
                    'samples' => $this->laboratory->samples($request),
                    'analyses' => $this->laboratory->analyses($request),
                    'discounts' => $this->laboratory->discounts($request)
                ];
            break;
            case 'payment-chart':
                return $this->payment->chart($request);
            break;
            case 'payments':
                return [
                    'info' => $this->payment->info($request),
                    'info2' => $this->payment->info2($request),
                    'statuses' => $this->payment->statuses($request),
                    'methods' => $this->payment->methods($request),
                    'discounts' => $this->payment->discounts($request),
                    'chart' => $this->payment->chart($request)
                ];
            break;
            case 'gad':
                return [
                    'discounts' => $this->gad->discounts($request),
                    'genders' => $this->gad->gender($request),
                    'purposes' => $this->gad->purposes($request),
                    'laboratories' => $this->gad->laboratory($request),
                ];
            break;
            case 'gad-chart':
                return $this->gad->chart($request);
            break;
            case 'gad-excel':
                return $this->gad->excel($request);
            break;
            default:
            return inertia('Modules/Insights/Index');
        }
    }

    public function show($code,Request $request){
        switch($code){
            case 'top':
                return inertia('Modules/Insights/Top/Index',[
                    'years' => $this->top->years(),
                    'types' => $this->top->laboratory_types(),
                    'info' => [
                        'month' => \DateTime::createFromFormat('!m', date('m'))->format('F'),
                        'year' => date('Y')
                    ]
                ]);
            break;
            case 'daily':
                return inertia('Modules/Insights/Daily/Index',[
                    'info' => [
                        'date' => date('Y-m-d', strtotime(now()))
                    ]
                ]);
            break;
            case 'customers':
                return inertia('Modules/Insights/Customers/Index',[
                    'years' => $this->top->years(),
                    'types' => $this->top->laboratory_types(),
                    'info' => [
                        'month' => \DateTime::createFromFormat('!m', date('m'))->format('F'),
                        'year' => date('Y')
                    ]
                ]);
            break;
            case 'laboratories':
                return inertia('Modules/Insights/Laboratories/Index',[
                    'years' => $this->top->years(),
                    'y' => date('Y'),
                    'types' => $this->top->laboratory_types(),
                ]);
            break;
            case 'payments':
                return inertia('Modules/Insights/Payments/Index',[
                    'years' => $this->top->years(),
                    'y' => date('Y'),
                    'types' => $this->top->laboratory_types(),
                ]);
            break;
            case 'gad':
                return inertia('Modules/Insights/Gad/Index',[
                    'y' => date('Y'),
                   'years' => $this->top->years(),
                    'types' => $this->top->laboratory_types(),
                    'info' => [
                        'month' => \DateTime::createFromFormat('!m', date('m'))->format('F'),
                        'year' => date('Y')
                    ]
                ]);
            break;
        }
    }
}
