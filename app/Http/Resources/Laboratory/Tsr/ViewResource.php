<?php

namespace App\Http\Resources\Laboratory\Tsr;

use Hashids\Hashids;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ViewResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $hashids = new Hashids('krad',10);
        $code = $hashids->encode($this->id);

        return [
            'id' => $this->id,
            'qr' => $code,
            'code' => $this->code,
            'laboratory' => $this->laboratory,
            'agency' => $this->agency,
            'status' => $this->status,
            'groups' => $this->groups,
            'children' => $this->children,
            'customer' => new CustomerResource($this->customer),
            'samples' => SampleResource::collection($this->samples),
            'conforme' => $this->conforme->name, 
            'conforme_id' => $this->conforme->id, 
            'conforme_no' => $this->conforme->contact_no, 
            'received' => $this->received->profile->firstname.' '.$this->received->profile->lastname,
            'payment' => $this->payment,
            'purpose' => $this->purpose,
            'due_at' => $this->due_at,
            'addfee' => $this->addfee,
            'is_shelf' => $this->is_shelf,
            'services' => $this->services,
            'referral' => $this->referral,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
        ];
    }
}
