<!DOCTYPE html>
<html lang="en">

  <head>
    @include('partials._head')
  </head>



  <body>

    @include('partials._nav')

    @yield('body')
    
    @include('partials._footer')

   @include('partials._javascript')

  </body>

</html>
