<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movies extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['movie_name','movie_description','movie_gener'];
    // protected $guarded=[];
}

