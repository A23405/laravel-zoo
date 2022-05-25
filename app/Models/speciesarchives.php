<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class speciesarchives extends Model
{
    use HasFactory;

    protected $fillable = [
        'species_',
        'name',
        'phylum_',
        'class_',
        'order_',
        'family_',
        'genus_',
        'body_type',
        'scientific_name',
        'feeding_habits',
        'feature',
        'distribution',
        'conservation_level',
        'area',
        'img',
    ];
}
