<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class ReviewResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request): array|JsonSerializable|Arrayable
    {
        return [
            'name' => $this->name,
            'link' => $this->email,
            'photo' => $this->photo,
            'description' => $this->offsetGet('reviews_translation')->first()->description,
            'summary' => $this->offsetGet('reviews_translation')->first()->summary,
        ];
    }
}
