<?php

namespace App\Http\Controllers;

use App\UserPost;
use App\Post;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class UserPostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth.basic');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $this->validate($request, array(
            'title' => 'required',
            'body' => 'required',
            'image' => 'required'
        ));

        
        //storing must follow this convention (model lowered class name)-trixFields

        if (Auth::check()) {
            // $data = $request->input("post-trixFields");
            // //dd($data['content']);
            // $post = new Post;
            // $post->title = $request->input('title');
            // $post->body = $data['content'];
            // $post->image = $request->file('image')->store('postImages', 'public');

            // $post->save();
            Post::create(request()->all());
            Post::create([
                'post-trixFields' => request('post-trixFields'),
            ]);
            // $userPost = new UserPost;
            // $userPost->post_id = $post->id;
            // $userPost->user_id = Auth::user()->id;

            // $userPost->save();
            return redirect()->route('home');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserPost  $userPost
     * @return \Illuminate\Http\Response
     */
    public function show(UserPost $userPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserPost  $userPost
     * @return \Illuminate\Http\Response
     */
    public function edit(UserPost $userPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserPost  $userPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserPost $userPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserPost  $userPost
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userPost = UserPost::find($id);
        Comment::where('post_id', $userPost->post->id)->delete();
        $userPost->delete();
        $userPost->post->delete();

        return redirect()->route('home');
    }
}
