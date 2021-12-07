<?php

namespace App\Http\Controllers;

use Auth;
use App\Post;
use App\UserPost;
use App\Comment;

class PagesController extends Controller
{

    public function getIndex()
    {
        $some = UserPost::all();

        return view('pages/welcome', ['userPosts' => $some]);
    }

    public function getAbout()
    {
        return view('pages/about');
    }

    public function getContact()
    {
        return view('pages/contact');
    }

    public function getPost(int $id)
    {
        $userPost = UserPost::find($id);

        $userComments = Comment::where('post_id', $userPost->post->id)->get();
        
        return view('pages/post')
        ->with('userPost', $userPost)
        ->with('userComments', $userComments);
    }
   
}