<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function products(){
        return $this->hasMany(Products::class);
    }

    protected $fillable = ['name'];

    protected $table = 'groups';
}
