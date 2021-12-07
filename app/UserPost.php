<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class UserPost extends Model
{
    protected $dates = ['date_begin', 'date_end'];

    protected $fillable = [
        'post_id',
        'user_id',
    ];

    
    public function user() {
        return $this->belongsTo('App\User');
    }
  
    public function post() {
        return $this->belongsTo('App\Post');
    }
}