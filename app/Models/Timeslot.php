<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeslot extends Model
{
    use HasFactory;

    public function preacherAvailability()
    {
        return $this -> hasMany(preacherAvailability :: class);
    }
}
