<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Sample')</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    @include('layouts._header')

    <div class="container">
      <div class="col-md-offset-1 col-md-10">
      @include('shared.messages')
      @yield('content')
      @include('layouts._footer')
      </div>
    </div> 

  </body>
</html>