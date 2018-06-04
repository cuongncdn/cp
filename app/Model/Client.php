<?php

namespace App\Model;

use App\Model\Appointment;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function appointments(){
        return $this->hasMany(Appointment::class);
    }
}
