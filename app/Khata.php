<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khata extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];
}
