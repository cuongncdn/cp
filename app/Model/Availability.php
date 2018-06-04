<?php

namespace App\Model;

use App\Model\Employee;
use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
