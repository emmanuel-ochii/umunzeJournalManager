<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
         'category_name'
    ];

    function journal(){
    	return $this->belongsTo('App\Models\Journal','id');
    }
}
