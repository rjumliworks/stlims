<?php

namespace App\Http\Resources\Laboratory\Tsr;

use Hashids\Hashids;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ListResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $hashids = new Hashids('krad',10);
        $code = $hashids->encode($this->id);

        $total = 0; $completed = 0; $ongoing = 0;
        if(count($this->samples) > 0){
            foreach ($this->samples as $result) {
                $total = $total + $result->analyses_count;
                $completed = $completed + $result->completed_analyses_count;
                $ongoing = $ongoing + $result->ongoing_analyses_count;
            }

            $completedPercentage = ($completed != 0) ? ($completed / $total) * 100 : 0;
            $ongoingPercentage = ($ongoing != 0) ? ($ongoing / $total) * 100 : 0;
            $ongoingPercentage = ($ongoingPercentage != 0) ? $ongoingPercentage/2 : 0;

            $analyses = [$completedPercentage+$ongoingPercentage];
        }else{
            $analyses = [0];
        }

        return [
            'id' => $this->id,
            'qr' => $code,
            'code' => $this->code,
            'is_referral' => $this->is_referral,
            'laboratory' => $this->laboratory,
            'status' => $this->status,
            'customer' => ($this->customer->customer_name->has_branches) ? ($this->customer->is_main) ? $this->customer->customer_name->name :  $this->customer->customer_name->name.' - '.$this->customer->name : $this->customer->customer_name->name,
            'payment' => $this->payment,
            'due_at' => $this->due_at,
            'analyses' => $analyses,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
        ];
    }
}
