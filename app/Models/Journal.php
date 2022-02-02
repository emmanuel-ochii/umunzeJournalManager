<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_name', 'author_email', 'title', 'abstract', 'journal', 'doi', 'issn', 'institution', 'institution_email', 'affiliation', 'country', 'cat_id', 'author', 'featured_img', 'user_id'
    ];

    public function comments()
    {
        return $this->hasMany('App\Models\Comment')->orderBy('id', 'desc');
    }

    function category(){
    	return $this->belongsTo('App\Models\Category','cat_id');
    }
}
