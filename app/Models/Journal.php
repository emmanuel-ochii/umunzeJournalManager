<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_name', 'author_email','title','abstract','journal','doi','issn','institution','institution_email','affiliation','country','category','author','featured_img'
    ];
}
