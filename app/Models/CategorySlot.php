<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorySlot extends Model
{
    use HasFactory;

    public function preacher()
    {
        return $this -> hasMany(Preacher :: class);
    }
}
