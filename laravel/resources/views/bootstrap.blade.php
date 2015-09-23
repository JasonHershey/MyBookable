@extends('openbootstrap')

@section('navigation')
<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
</div>

<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/">MyBookables</a>
  </div>

  <div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
      @section('nav')
      @show

    </ul>
  </div><!--/.nav-collapse -->
</div>
</nav>
@endsection

@section('container')
<div class="jumbotron" style="margin-top: 51px;">
  <div class="container">
      <h1>@section('title')
          @show</h1>
    </div>
</div>
<div class="container">
@section('content')
@show
</div><!-- /.container -->
@endsection
