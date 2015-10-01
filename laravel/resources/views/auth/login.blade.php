@extends('bootstrap')

@section('title')
  MyBookables Login
@endsection

@section('nav')
  <li class="active"><a href="/auth/login">Login</a></li>
  <li><a href="/auth/register">Sign Up</a></li>
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

  <form method="POST" action="/auth/login">
      {!! csrf_field() !!}

      <div class="form-group">
          <label>Email</label>
          <input class="form-control" type="email" name="email" value="{{ old('email') }}">
      </div>

      <div class="form-group">
          <label>Password</label>
          <input class="form-control" type="password" name="password" id="password">
      </div>

      <div class="form-group">
          <input type="checkbox" name="remember"> Remember Me
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success btn-lg">Login</button>
      </div>

      <div class="form-group">
        <a class="btn btn-danger btn-lg" href="/password/email">Forgot Password?</a>
  </form>
</div>
@endsection
