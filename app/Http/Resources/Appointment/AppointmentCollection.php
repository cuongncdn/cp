<?php

namespace App\Http\Resources\Appointment;

use Illuminate\Http\Resources\Json\JsonResource;

class AppointmentCollection extends JsonResource
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
            'date' => $this->date,
            'time' => $this->time,
            'status' => $this->status,
            'employee' => route('employees.show', $this->employee_id),
            'client' => route('clients.show', $this->client_id),
        ];
    }
}
