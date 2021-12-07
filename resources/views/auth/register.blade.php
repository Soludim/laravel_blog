@extends('main')

@section('title', '| Register')
@section('content')
<p>Register</p>
<form method="POST" method="{{ route('register') }}">
  {{csrf_field()}}
  <p> Name: <input type="text" name="name" /></p>
  <p> Email: <input type="email" name="email" /></p>
  <p> Password: <input type="password" name="password" /></p>
  <p> <input type="submit" value="Sign Up" /></p>
</form>
@endsection