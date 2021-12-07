@extends('main')

@section('title', ' | Home')

@section('content')
<!-- Page Header -->
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Let's Blog</h1>
          <span class="subheading">A Blog For All</span>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="clearfix" style="margin-right: 10px">
  <button class="btn btn-primary float-right" data-toggle="modal" data-target="#post_modal">Add Post</button>
</div>


<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-10 col-md-10 mx-auto">
      @foreach($userPosts as $userPost)
      <div class="post-preview">
        <a href="/post/{{$userPost->id}}">
          <h2 class="post-title">
            {{$userPost->post->title}}
          </h2>
          <h3 class="post-subtitle">
            {{substr($userPost->post->body, 0, 49) }} ...
          </h3>
        </a>
        <p class="post-meta">Posted by
          <a href="#">{{$userPost->user->name}}</a>
          on {{date('F', strtotime($userPost->updated_at))}} {{date('d', strtotime($userPost->updated_at)) }}, {{ date('yy', strtotime($userPost->updated_at)) }}</p>
      </div>
      <hr>
      @endforeach
      <hr>
      <!-- Pager -->
      <div class="clearfix">
        <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
      </div>
    </div>
  </div>
</div>

<hr>
@endsection