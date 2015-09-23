<!DOCTYPE html>
<html>
    <head>

      <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{asset('css/lato.css')}}" rel="stylesheet" type="text/css">
      <script src="{{asset('js/jquery.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>

      @section('more_assets') @show

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

      @section('navigation') @show



    @section('container')
    @show


    </body>
</html>
