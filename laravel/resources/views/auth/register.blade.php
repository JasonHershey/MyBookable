@extends('bootstrap')

@section('title')
  Sign up for bookables
@endsection

@section('nav')
  <li><a href="/auth/login">Login</a></li>
  <li class="active"><a href="/auth/register">Sign Up</a></li>
@endsection


@section('content')
<div class="col-md-offset-4 col-md-4 col-xs-12">

  @if (count($errors->all()) > 0)
    <div class="alert alert-danger">
      <strong>Whoops! Something went wrong!</strong>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form method="POST" action="/auth/register">
      {!! csrf_field() !!}

      <div class="form-group">
        <label>First Name</label>
        <input class="form-control" type="text" name="fname" value="{{ old('fname') }}">
      </div>

      <div class="form-group">
        <label>Last Name</label>
        <input class="form-control" type="text" name="lname" value="{{ old('lname') }}">
      </div>

      <div class="form-group">
        <label>Username</label>
        <input class="form-control" type="text" name="uname" value="{{ old('uname') }}">
      </div>

      <div class="form-group">
          <label>Email</label>
          <input class="form-control" type="email" name="email" value="{{ old('email') }}">
      </div>

      <div class="form-group">
          <label>Password</label>
          <input class="form-control" type="password" name="password">
      </div>

      <div class="form-group">
          <label>Confirm Password</label>
          <input class="form-control" type="password" name="password_confirmation">
      </div>

      <div class="form-group">
          <input type="checkbox" name="remember"> Remember Me
      </div>

      <div class="form-group">
          <button type="submit" class="btn btn-success btn-lg">Register</button>
      </div>
  </form>
</div>
@endsection
