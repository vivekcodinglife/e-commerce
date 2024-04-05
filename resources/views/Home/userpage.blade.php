<!DOCTYPE html>
<html>
   @include('Home.head')
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('Home.Header')
         <!-- end header section -->
         <!-- slider section -->
         @include('Home.slider')
         <!-- end slider section -->
      </div>
      <!-- why section -->
      @include('Home.why')
      <!-- end why section -->

      <!-- arrival section -->
      @include('Home.new_arrival')
      <!-- end arrival section -->

      <!-- product section -->
      @include('Home.product')
      <!-- end product section -->

      <!-- subscribe section -->
      @include('Home.subscriber')
      <!-- end subscribe section -->
      <!-- client section -->
     @include('Home.client')
      <!-- end client section -->
      <!-- footer start -->
      @include('Home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

         </p>
      </div>
      <!-- jQery -->
      <script src="templates/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="templates/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="templates/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="templates/js/custom.js"></script>
   </body>
</html>
