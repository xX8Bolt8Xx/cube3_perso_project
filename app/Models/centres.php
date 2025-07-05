<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Centres extends Model
{
    /** @use HasFactory<\Database\Factories\CentresFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'latitude',
        'longitude',
        'description'
    ];

}
