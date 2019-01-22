<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{	

	protected $table = "categories";

    protected $fillable = ['id', 'description'];

    /**
     * Get the posts for the category.
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
