<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AdsenseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'type' => $this->type,
            'code' => $this->code,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s', $this->updated_at)->format('d M Y h:i A'),
        ];
    }
}
