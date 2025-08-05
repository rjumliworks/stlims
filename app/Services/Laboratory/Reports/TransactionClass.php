<?php

namespace App\Services\Laboratory\Reports;

use Carbon\Carbon;
use App\Models\FinanceOp;
use Illuminate\Support\Facades\DB;

class TransactionClass
{
    public function __construct()
    {
        $this->agency = (\Auth::user()->myroles) ? \Auth::user()->myroles[0]->agency_id : null;
    }

    public function overall()
    {
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = $startOfWeek->copy()->addDays(4);

        $financeOps = FinanceOp::whereBetween('created_at', [$startOfWeek->copy()->startOfDay(), $endOfWeek->copy()->endOfDay()])
            ->where('status_id',7)
            ->where('agency_id',$this->agency)
            ->get();

        $days = collect(range(0, 4))->map(fn($i) => $startOfWeek->copy()->addDays($i));

        $paymentLabels = [
            17 => 'Cash',
            18 => 'Cheque',
            19 => 'Money Order',
            20 => 'Bank Deposit',
            22 => 'Online Transfer',
        ];

        $tableData = [];

        foreach ($financeOps as $item) {
            $payment = $paymentLabels[$item->payment_id] ?? 'Other';
            $day = Carbon::parse($item->created_at)->format('l');

            if (!isset($tableData[$payment])) {
                $tableData[$payment] = [
                    'payment_method' => $payment,
                    'Monday' => 0,
                    'Tuesday' => 0,
                    'Wednesday' => 0,
                    'Thursday' => 0,
                    'Friday' => 0,
                ];
            }
            $tableData[$payment][$day] += (float) str_replace(['₱ ', '₱', ',', ' '], '', $item->total);
        }

        return array_values($tableData);
    }

    public function laboratory()
    {
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = $startOfWeek->copy()->addDays(4);

        $financeOps = FinanceOp::where('payorable_type', 'App\Models\Customer')
            ->whereBetween('created_at', [$startOfWeek->copy()->startOfDay(), $endOfWeek->copy()->endOfDay()])
            ->where('status_id',7)
            ->where('agency_id',$this->agency)
            ->get();

        $days = collect(range(0, 4))->map(fn($i) => $startOfWeek->copy()->addDays($i));

        $paymentLabels = [
            17 => 'Cash',
            18 => 'Cheque',
            19 => 'Money Order',
            20 => 'Bank Deposit',
            22 => 'Online Transfer',
        ];

        $tableData = [];

        foreach ($financeOps as $item) {
            $payment = $paymentLabels[$item->payment_id] ?? 'Other';
            $day = Carbon::parse($item->created_at)->format('l');

            if (!isset($tableData[$payment])) {
                $tableData[$payment] = [
                    'payment_method' => $payment,
                    'Monday' => 0,
                    'Tuesday' => 0,
                    'Wednesday' => 0,
                    'Thursday' => 0,
                    'Friday' => 0,
                ];
            }
            $tableData[$payment][$day] += (float) str_replace(['₱ ', '₱', ',', ' '], '', $item->total);
        }

        return array_values($tableData);
    }

    public function nonlaboratory(){
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = $startOfWeek->copy()->addDays(4);

        $financeOps = FinanceOp::where('payorable_type', 'App\Models\FinanceName')
            ->whereBetween('created_at', [$startOfWeek->copy()->startOfDay(), $endOfWeek->copy()->endOfDay()])
            ->where('status_id',7)
            ->where('agency_id',$this->agency)
            ->get();

        $days = collect(range(0, 4))->map(fn($i) => $startOfWeek->copy()->addDays($i));

        $paymentLabels = [
            17 => 'Cash',
            18 => 'Cheque',
            19 => 'Money Order',
            20 => 'Bank Deposit',
            22 => 'Online Transfer',
        ];

        $tableData = [];

        foreach ($financeOps as $item) {
            $payment = $paymentLabels[$item->payment_id] ?? 'Other';
            $day = Carbon::parse($item->created_at)->format('l');

            if (!isset($tableData[$payment])) {
                $tableData[$payment] = [
                    'payment_method' => $payment,
                    'Monday' => 0,
                    'Tuesday' => 0,
                    'Wednesday' => 0,
                    'Thursday' => 0,
                    'Friday' => 0,
                ];
            }
            $tableData[$payment][$day] += (float) str_replace(['₱ ', '₱', ',', ' '], '', $item->total);
        }

        return array_values($tableData);
    }

}
