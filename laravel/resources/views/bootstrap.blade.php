<!DOCTYPE html>
<html>
    <head>

      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


      <title>@section('title') @show</title>

      <script>
      function update(where, how, what) {
        what = typeof what !== 'undefined' ? what : {};
        $.ajax({
          method: how,
          url: where,
          data: what,
          success: function(result) {
            $('#myModal').html(result);
          }
        });
      }

      </script>


    </head>
    <body>

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
          <a class="navbar-brand" href="#">Todo App</a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            @section('nav')
            @show

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


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






    </body>
</html>
