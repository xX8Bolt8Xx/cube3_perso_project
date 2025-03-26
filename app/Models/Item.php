<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // Les colonnes de la table autorisées pour la création ou l'update
    protected $fillable = ['name', 'end_time', 'price', 'image'];
}
