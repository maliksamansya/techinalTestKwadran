<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TZodiac extends Model
{
    // use HasFactory;
    use HasFactory;

    protected $table = 't_zodiac';

    protected $fillable = [
        'start_date',
        'end_date',
        'zodiac_name',
    ];
}
