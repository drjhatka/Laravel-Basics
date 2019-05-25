<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primary_key ='post_id';

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'post_id');
    }
}
