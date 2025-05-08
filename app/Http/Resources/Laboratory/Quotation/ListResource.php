<?php

namespace App\Http\Resources\Laboratory\Quotation;

use Hashids\Hashids;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ListResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $hashids = new Hashids('krad',10);
        $code = $hashids->encode($this->id);

        return [
            'id' => $this->id,
            'qr' => $code,
            'code' => $this->code,
            'total' => $this->total,
            'laboratory' => $this->laboratory,
            'status' => $this->status,
            'discounted' => $this->discounted,
            'purpose' => $this->purpose,
            'customer' => ($this->customer->customer_name->has_branches) ? ($this->customer->is_main) ? $this->customer->customer_name->name :  $this->customer->customer_name->name.' - '.$this->customer->name : $this->customer->customer_name->name,
            'received' => $this->createdby->profile->firstname.' '.$this->createdby->profile->lastname,
            'created_at' => $this->created_at,
        ];
    }
}
