<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
     public $fillable = ['isbn','title','author', 'publisher', 'image' ];
}
