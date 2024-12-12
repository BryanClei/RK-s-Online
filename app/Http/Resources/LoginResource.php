<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LoginResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "full_name" => [
                "first_name" => $this->first_name,
                "middle_name" => $this->middle_name,
                "last_name" => $this->last_name,
                "suffix" => $this->suffix,
            ],
        ];
    }
}