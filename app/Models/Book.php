<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['bookName', 'author', 'date'];

    function lendees(){
        return $this->hasMany('App\Models\Lendee');
    }
}
