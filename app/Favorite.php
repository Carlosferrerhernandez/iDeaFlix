<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    //

    protected $table = "user_post";

    protected $fillable = ['id', 'user_id', 'post_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
