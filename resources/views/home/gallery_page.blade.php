<!DOCTYPE html>
<html lang="en">
   <head>
      @include('home.css')
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"></div>
      </div>
      <!-- end loader -->
      <!-- header -->         
      <header>
        @include('home.header')
      </header>
      <!-- end header inner -->
      <!-- end header -->
      
      <!-- gallery -->
     @include('home.galary')
      <!-- end gallery -->
      
      <!--  footer -->
     @include('home.footer')
   </body>
</html> 