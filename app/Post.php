<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    	'title',
    	'content',
    	'is_feature',
    	'is_top',
    	'user_id',
    	'page_view',
    ];

    public function user()
    {
    	return $this->belongsTo('\App\User');
    }

    public function comments()
    {
    	return $this->hasMany('\App\Comment');
    }
}
