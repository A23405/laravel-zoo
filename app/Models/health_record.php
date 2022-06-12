<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class health_record extends Model
{
    use HasFactory;

    protected $fillable = [
        'aid',
        'body_length',
        'weight',
        'estrus',
        'other',
    ];
}
