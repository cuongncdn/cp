<?php

namespace App\Http\Resources\Availability;

use Illuminate\Http\Resources\Json\JsonResource;

class AvailabilityCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'date' => $this->date,
            'time' => $this->time,
            'employee' => route('employees.show', $this->employee_id),
        ];
    }
}
