<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name'      => $this->name,
            'mobile'    => $this->mobile,
            'email'     => $this->email,
            'latitude'  => $this->latitude,
            'longitude' => $this->longitude,
            'address'   => $this->address,
        ];
    }
}
