<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_name', 'author_email', 'title', 'abstract', 'journal', 'doi', 'issn', 'institution', 'institution_email', 'affiliation', 'country', 'category', 'author', 'featured_img', 'cat_id', 'user_id'
    ];

    // public function user()
    // {
    //     return $this->belongsTo('App\User');
    // }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment')->orderBy('id','desc');
    }

    function category()
    {
        return $this->belongsTo('App\Models\Category', 'category');
    }
}
