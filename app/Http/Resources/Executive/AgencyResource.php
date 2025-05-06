<?php

namespace App\Http\Resources\Executive;

use Hashids\Hashids;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AgencyResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $hashids = new Hashids('krad',10);
        $code = $hashids->encode($this->id);

        return [
            'code' => $code,
            'id' => $this->id,
            'short' => $this->code,
            'name' => $this->name,
            'member_since' => $this->member_since,
            'contact_no' => $this->contact_no,
            'is_active' => $this->is_active,
            'member' => $this->member,
            'type' => $this->type,
            'configuration' => $this->configuration,
        ];
    }
}
