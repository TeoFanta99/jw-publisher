<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preacher extends Model
{
    use HasFactory;

    public function agegroup()
    {
        return $this -> belongsTo(AgeGroup :: class);
    }

    public function categoryslot()
    {
        return $this -> belongsTo(CategorySlot :: class);
    }

    public function preacherAvailability()
    {
        return $this -> hasMany(preacherAvailability :: class);
    }

    
}
