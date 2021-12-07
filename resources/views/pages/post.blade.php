@extends('main')

@section('title', ' | Post')

@section('content')

<!-- Page Header -->
<header class="masthead">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-heading">
          <h1>{{$userPost->post->title}}</h1>
          <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
          <span class="meta">Posted by
            <a href="#">{{$userPost->user->name}}</a>
            on {{date('F', strtotime($userPost->updated_at))}} {{date('d', strtotime($userPost->updated_at)) }}, {{ date('yy', strtotime($userPost->updated_at)) }}</span>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Post Content -->
<article>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-10 mx-auto" style="font-size: 25px">
        {{$userPost->post->body}}
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-sm-12 thumbnail mx-auto">
        <img src="{{asset('storage/' . $userPost->post->image) }}" />
      </div>
    </div>
  </div>
</article>
@if(@Auth::user()->id == $userPost->user->id)
<div class="container">
  <div class="row pull-right">
    <a href="#" class="btn btn-default" onclick="
             var result = confirm('Are you sure you want to delete this post?');
             if (result){
               event.preventDefault();
             document.getElementById('delete-post').submit();
             }">Delete Post</a>
    <form id="delete-post" action="{{ route('ups.destroy',[$userPost->id]) }}" method="POST" style="display: none;">
      <input type="hidden" name="_method" value="DELETE">
      {{ csrf_field() }}
    </form>
  </div>
</div>
@endif
<br /> <br />
<div class="container">
  <div class="row">
    <div class="col-md-8 col-lg-8 col-xs-12 col-sm-12">
      <form method="POST" action="{{ route('comments.store') }}">
        {{csrf_field()}}
        <input type="text" name="post_id" value="{{ $userPost->post->id }}" hidden />
        <label for="content">Comment and Questions</label>
        <textarea style="margin-bottom:10px" class="form-control" row="6" required name="content" id="content" placeholder="Enter your message here"></textarea>
        <input type="submit" value="Post" class="btn btn-default" />
      </form>
    </div>
  </div>
</div>
<br />
@include('partials._comment')
<hr>
@endsection