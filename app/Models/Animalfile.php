<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animalfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'aid',
        'name',
        'species_',
        'sex',
        'birth',
        'img',
    ];
}
