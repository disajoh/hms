<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Dashboard Bagale Hotel</title>

    <!-- Bootstrap core CSS -->
    <link href="{!! asset('css/bootstrap.min.css') !!}" type="text/css" rel="stylesheet">
    <link href="{!! asset('css/bootstrap-theme.min.css') !!}"  rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{!! asset('css/dashboard.css') !!}"  rel="stylesheet">

    
    <script src="{ !! asset('js/bootstrap.min.js') !!}"></script>
    
    <script src="{ !! asset('js/jquery-3.3.1.min.js') !!}"></script>

  </head>

  <body>
     @include('partials.nav')

      
          @yield('content')
          
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

   
  </body>
</html>
