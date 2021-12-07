@extends('main')

@section('title', '| Login')
@section('content')
<p>Login</p>
<form method="POST" action="{{ route('login') }}">
{{csrf_field()}}
  <p> Email: <input type="email" name="email" /></p>
  <p> Password: <input type="password" name="password" /></p>
  <p> <input type="submit" value="Login" /></p>
</form>
@endsection