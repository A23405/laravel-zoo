<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medical_record extends Model
{
    use HasFactory;

    protected $fillable = [
        'aid',
        'medical_location',
        'reason',
    ];
}
