<!doctype html>
<html lang="pt-br">
  @include('layouts.head')
  <body>
    @include('layouts.nav')
    @include('layouts.header')


    <main role="main" class="container">
      <div class="row">
        <div class="col-sm-8 blog-main">
            @yield('content')

            @include('layouts.aside')

          </div><!-- /.row -->
        </div><!-- /.blog-main -->
      </main><!-- /.container -->
    @include('layouts.footer')
  </body>
</html>
