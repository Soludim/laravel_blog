<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;

class Post extends Model
{
    use HasTrixRichText;
    
    protected $guarded = [];
    
    // protected $fillable = [
    //     'title',
    //     'body',
    //     'image'
    // ];

    public function userPosts() {
        return $this->hasMany('App\UserPost');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }
}