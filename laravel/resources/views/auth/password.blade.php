@extends('bootstrap')

@section('title')
  Reset Password
@endsection

@section('nav')
  <li><a href="/auth/login">Login</a></li>
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

  <form method="POST" action="/password/email">
      {!! csrf_field() !!}

      <div class="form-group">
          <label>Email</label>
          <input class="form-control" type="email" name="email" value="{{ old('email') }}">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success btn-lg">Reset</button>
      </div>
  </form>
</div>
@endsection
