<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Van extends Model
{
    protected $fillable = [
        "brand",
        "model",
        "built_in_year",
        "description",
        "plate"
    ];
    
    use HasFactory;
}
