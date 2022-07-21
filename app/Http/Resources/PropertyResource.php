<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PropertyResource extends JsonResource
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
            'id' => $this->id,
            'realtor' => $this->whenLoaded('realtor'),
            'property_type' => $this->whenLoaded('property_type'),
            'service' => $this->service,
            'state' => $this->whenLoaded('state'),
            'title' => $this->title,
            'address' => $this->address,
            'description' => $this->description,
            'bedrooms' => $this->bedrooms,
            'bathrooms' => $this->bathrooms,
            'living_rooms' => $this->living_rooms,
            'square_feet' => $this->square_feet,
            'cost' => number_format($this->cost),
            'features' => $this->features,
            'video' => $this->video,
            'map' => $this->map,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'property_photos' => $this->whenLoaded('property_photos'),
        ];
    }
}
