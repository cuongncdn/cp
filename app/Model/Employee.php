<?php

namespace App\Model;

use App\Model\Appointment;
use App\Model\Availability;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function appointments(){
        return $this->hasMany(Appointment::class);
    }
    public function availabilities(){
        return $this->hasMany(Availability::class);
    }
}