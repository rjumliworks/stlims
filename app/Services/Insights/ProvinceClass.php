<?php

namespace App\Services\Insights;

use App\Models\LocationProvince;
use Illuminate\Support\Facades\DB;

class ProvinceClass
{
    public function firms(){
        $results = DB::table('customers')
            ->join('customer_addresses', 'customers.id', '=', 'customer_addresses.customer_id')
            ->join('tsrs', 'customers.id', '=', 'tsrs.customer_id')
            ->whereYear('customers.created_at', 2025)
            ->where('customer_addresses.municipality_code', '!=', '097332000')
            ->where('classification_id',8)
            ->select(
                DB::raw('MONTH(customers.created_at) as month'),
                'customer_addresses.province_code',
                DB::raw('COUNT(DISTINCT customers.id) as customer_count')
            )
            ->groupBy('month', 'customer_addresses.province_code')
            ->get();

        // Step 2: Get only the province info we need
        $provinceCodesUsed = $results->pluck('province_code')->unique();

        $provinces = DB::table('location_provinces')
            ->whereIn('code', $provinceCodesUsed)
            ->select('code', 'name', 'region_code')
            ->get()
            ->keyBy('code');

        // Step 3: Organize data
        $provinceData = [];

        foreach ($provinceCodesUsed as $code) {
            $prov = $provinces[$code] ?? null;
            if (!$prov) continue;

            $provinceData[$code] = [
                'province_code' => $code,
                'province_name' => $prov->name,
                'region_code' => $prov->region_code,
                'months' => array_fill(1, 12, 0), // fill all months with 0
            ];
        }

        // Step 4: Fill actual counts
        foreach ($results as $row) {
            $code = $row->province_code;
            $month = (int) $row->month;

            if (isset($provinceData[$code])) {
                $provinceData[$code]['months'][$month] = $row->customer_count;
            }
        }

        // Step 5: Compute totals and prepare array
        $finalData = [];

        foreach ($provinceData as $item) {
            $total = array_sum($item['months']);
            $finalData[] = [
                'province_code' => $item['province_code'],
                'province' => $item['province_name'],
                'region_code' => $item['region_code'],
                'months' => $item['months'],
                'total' => $total,
            ];
        }

        // Step 6: Sort: Region 090000000 first, then alphabetical
        usort($finalData, function ($a, $b) {
            if ($a['region_code'] === '090000000' && $b['region_code'] !== '090000000') {
                return -1;
            } elseif ($a['region_code'] !== '090000000' && $b['region_code'] === '090000000') {
                return 1;
            }
            return strcmp($a['province'], $b['province']);
        });


        return $finalData;
    }

    public function zc(){
       // Step 1: Query actual counts
    $rawResults = DB::table('customers')
        ->join('customer_addresses', 'customers.id', '=', 'customer_addresses.customer_id')
        ->join('tsrs', 'customers.id', '=', 'tsrs.customer_id')
        ->join('location_barangays', 'customer_addresses.barangay_code', '=', 'location_barangays.code')
        ->whereYear('customers.created_at', 2025)
        ->where('customer_addresses.municipality_code', '=', '097332000')
        ->whereIn('location_barangays.district', ['1st', '2nd'])
        ->select(
            'location_barangays.district',
            DB::raw('MONTH(customers.created_at) as month'),
            DB::raw('COUNT(DISTINCT customers.id) as customer_count')
        )
        ->groupBy('location_barangays.district', DB::raw('MONTH(customers.created_at)'))
        ->get();

    // Step 2: Initialize structure for 1st and 2nd districts with months set to 0
    $grouped = [
        '1st' => array_fill(1, 12, 0),
        '2nd' => array_fill(1, 12, 0),
    ];

    // Step 3: Fill in actual counts
    foreach ($rawResults as $row) {
        $district = $row->district ?? 'Unknown';
        $month = (int) $row->month;

        if (isset($grouped[$district])) {
            $grouped[$district][$month] = $row->customer_count;
        }
    }

    // Step 4: Format final output with totals
    $final = [];

    foreach (['1st', '2nd'] as $district) {
        $months = $grouped[$district];
        $final[] = [
            'district' => $district,
            'months' => array_values($months), // optional if you want 0-based array
            'total' => array_sum($months),
        ];
    }

        return $final;
    }

    public function zcfirm(){
       // Step 1: Query actual counts
    $rawResults = DB::table('customers')
        ->join('customer_addresses', 'customers.id', '=', 'customer_addresses.customer_id')
        ->join('tsrs', 'customers.id', '=', 'tsrs.customer_id')
        ->join('location_barangays', 'customer_addresses.barangay_code', '=', 'location_barangays.code')
        ->whereYear('customers.created_at', 2025)
        ->where('customer_addresses.municipality_code', '=', '097332000')
        ->whereIn('location_barangays.district', ['1st', '2nd'])
        ->where('customers.classification_id',8)
        ->select(
            'location_barangays.district',
            DB::raw('MONTH(customers.created_at) as month'),
            DB::raw('COUNT(DISTINCT customers.id) as customer_count')
        )
        ->groupBy('location_barangays.district', DB::raw('MONTH(customers.created_at)'))
        ->get();

    // Step 2: Initialize structure for 1st and 2nd districts with months set to 0
    $grouped = [
        '1st' => array_fill(1, 12, 0),
        '2nd' => array_fill(1, 12, 0),
    ];

    // Step 3: Fill in actual counts
    foreach ($rawResults as $row) {
        $district = $row->district ?? 'Unknown';
        $month = (int) $row->month;

        if (isset($grouped[$district])) {
            $grouped[$district][$month] = $row->customer_count;
        }
    }

    // Step 4: Format final output with totals
    $final = [];

    foreach (['1st', '2nd'] as $district) {
        $months = $grouped[$district];
        $final[] = [
            'district' => $district,
            'months' => array_values($months), // optional if you want 0-based array
            'total' => array_sum($months),
        ];
    }

        return $final;
    }

    public function customers(){
    
        $results = DB::table('customers')
            ->join('customer_addresses', 'customers.id', '=', 'customer_addresses.customer_id')
            ->join('tsrs', 'customers.id', '=', 'tsrs.customer_id')
            ->whereYear('customers.created_at', 2025)
            ->where('customer_addresses.municipality_code', '!=', '097332000')
            ->select(
                DB::raw('MONTH(customers.created_at) as month'),
                'customer_addresses.province_code',
                DB::raw('COUNT(DISTINCT customers.id) as customer_count')
            )
            ->groupBy('month', 'customer_addresses.province_code')
            ->get();

        // Step 2: Get only the province info we need
        $provinceCodesUsed = $results->pluck('province_code')->unique();

        $provinces = DB::table('location_provinces')
            ->whereIn('code', $provinceCodesUsed)
            ->select('code', 'name', 'region_code')
            ->get()
            ->keyBy('code');

        // Step 3: Organize data
        $provinceData = [];

        foreach ($provinceCodesUsed as $code) {
            $prov = $provinces[$code] ?? null;
            if (!$prov) continue;

            $provinceData[$code] = [
                'province_code' => $code,
                'province_name' => $prov->name,
                'region_code' => $prov->region_code,
                'months' => array_fill(1, 12, 0), // fill all months with 0
            ];
        }

        // Step 4: Fill actual counts
        foreach ($results as $row) {
            $code = $row->province_code;
            $month = (int) $row->month;

            if (isset($provinceData[$code])) {
                $provinceData[$code]['months'][$month] = $row->customer_count;
            }
        }

        // Step 5: Compute totals and prepare array
        $finalData = [];

        foreach ($provinceData as $item) {
            $total = array_sum($item['months']);
            $finalData[] = [
                'province_code' => $item['province_code'],
                'province' => $item['province_name'],
                'region_code' => $item['region_code'],
                'months' => $item['months'],
                'total' => $total,
            ];
        }

        // Step 6: Sort: Region 090000000 first, then alphabetical
        usort($finalData, function ($a, $b) {
            if ($a['region_code'] === '090000000' && $b['region_code'] !== '090000000') {
                return -1;
            } elseif ($a['region_code'] !== '090000000' && $b['region_code'] === '090000000') {
                return 1;
            }
            return strcmp($a['province'], $b['province']);
        });


        return $finalData;
    }

}
