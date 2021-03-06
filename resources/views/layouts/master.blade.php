<!doctype html>
<html lang="pt-br">
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Blog Template for Bootstrap</title>
 
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
  </head>
  
  <body>

    
    @include('layouts.nav')
    
      @if($flash = session('message'))
        <div id="flash-message" class="alert alert-success">
          {{ $flash }}
        </div>
      @endif  
    @include('layouts.header')


    <main role="main" class="container">
      <div class="row">

         @yield('content')
       
        </div><!-- /.row -->
      </main><!-- /.container -->
      
      @include('layouts.footer')
  </body>
</html>
