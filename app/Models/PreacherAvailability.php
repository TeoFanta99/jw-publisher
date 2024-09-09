<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreacherAvailability extends Model
{
    use HasFactory;

    public function timeslot()
    {
        return $this -> belongsTo(Timeslot :: class);
    }

    public function preacher()
    {
        return $this -> belongsTo(Preacher :: class);
    }
}
