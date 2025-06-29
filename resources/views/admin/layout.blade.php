<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <body>
    @include('admin.header')
        <!-- Sidebar Navidation Menus-->
        @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      @yield('content')
        @include('admin.footer')
  </body>
</html> 