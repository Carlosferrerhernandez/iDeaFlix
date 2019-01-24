<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{	

	protected $table = "posts";

    protected $fillable = ['id', 'name', 'description', 'url', 'category_id'];

	/**
     * The users that belong to the post.
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    /**
     * Get the comments for the blog post.
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    

    /**
     * Get the category that owns the post.
     */
    public function category()
    {
        return $this->belongsTo('App\category');
    }
   
}
