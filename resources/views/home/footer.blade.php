 <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class=" col-md-4">
                     <h3>Contact US</h3>
                     <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Address</li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i> +01 1234569540</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> demo@gmail.com</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <h3>Menu Link</h3>
                     <ul class="link_menu">
                        <li class="active"><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}"> about</a></li>
                        <li><a href="{{ route('room') }}">Our Room</a></li>
                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <h3>News letter</h3>
                     <form class="bottom_form">
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">subscribe</button>
                     </form>
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                        
                        <p>
                        © 2019 All Rights Reserved. Design by <a href="https://html.design/"> Free Html Templates</a>
                        <br><br>
                        Distributed by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                        </p>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <!-- Using CDN for testing -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      <!-- Local files as fallback -->
      <script src="/js/jquery.min.js"></script>
      <script src="/js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="/js/custom.js"></script>
      
      <!-- Script to hide loader -->
      <script>
        $(document).ready(function() {
            // Hide loader after page loads
            setTimeout(function() {
                $('.loader_bg').fadeOut();
            }, 1000);
        });
        
        // Fallback: hide loader after 3 seconds
        setTimeout(function() {
            $('.loader_bg').fadeOut();
        }, 3000);
      </script>