<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Summit Climb</title>

    <!-- Bootstrap core CSS -->
    <!-- Custom styles for this template -->
   {{--  <link href="/css/cover.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet"> --}}

    <link href="{{ mix('/css/frontend/frontend.css') }}" rel="stylesheet" type="text/css">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <header class="masthead clearfix">
            @include('layouts.partials.navbar')
          </header>

         @yield('content')

          @include('layouts.partials.footer')

        </div>

      </div>

    </div>
  </body>
</html>
