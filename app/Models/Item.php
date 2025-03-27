<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    /** @use HasFactory<\Database\Factories\ItemFactory> */
    use HasFactory;

    // Les colonnes autorisées pour la création ou l'update
    protected $fillable = ['name', 'end_time', 'price', 'image'];

    public function Users(){
        return $this->belongsToMany('App\Models\User');
    }

}

