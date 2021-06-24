<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Movie extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // para retornar todos do array do banco
        // return parent::toArray($request);
        return [
            'name' => $this->name,
            'part' => $this->part,
            'image_url' => $this->image_url,
            'year' => $this->year,
            'stats' => $this->stats,
            'details' => $this->details,
            'genre_id' => $this->genre_id,
            'url' => $this->url,
        ];
    }
}
