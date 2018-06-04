<?php

namespace App\Model;

use App\Model\Employee;
use App\Model\Client;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public function employee(){
        return $this->belongsTo(Employee::class);
    }
    public function client(){
        return $this->belongsTo(Client::class);
    }
}
