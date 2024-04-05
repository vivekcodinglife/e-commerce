<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="templates/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="templates/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="templates/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="templates/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="index.html"><img width="250" src="images/logo.png" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item ">
                           <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="{{url('About')}}">About</a></li>
                              <li><a href="{{url('testimonial')}}">Testimonial</a></li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('products_page')}}">Products</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('blog')}}">Blog</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('contact')}}">Contact</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('cart')}}">Cart</a>
                         </li>


                        <form class="form-inline">
                           <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <i class="fa fa-search" aria-hidden="true"></i>
                           </button>
                        </form>

                             @if (Route::has('login'))
                             @auth


                             <x-app-layout>

                             </x-app-layout>

                             @else

                            <a class="btn  my-2 my-sm-0  border border-primary " href="{{ route('login') }}">Login</a>
                            <a class="btn  my-2 my-sm-0  border border-primary m-2" href="{{ route('register') }}">Register</a>
                            @endauth
                            @endif


                     </ul>
                  </div>
               </nav>
            </div>
         </header>

         @if(session()->has('delete_meassage'))
         <div class="alert alert-danger">
             <button class="close" type="close" data-dismiss="alert" aria-hidden="true">x</button>
             {{session()->get('delete_meassage')}}

         </div>
         @endif
         <!-- end header section -->
         <!-- slider section -->

             <?php $total = 0; ?>
          @foreach ($cart as $cart)



         <div class="container d-flex justify-content-center mt-5">
            <div class="row">
             <div class="col-lg-6">
              <div class="image mt-5">
               <img src="/products/{{$cart->image}}" alt="" class="w-50 img-1">
              </div>
             </div>
             <div class="col-lg-6 mt-5">
                <ul>
                    <li>{{$cart->product_title}}</li>


                    <li>{{$cart->quantity}}</li>


                    <li>{{$cart->price}}</li>


                </ul>
               <p>{{$cart->created_at}}</p>

                <a  href="{{url('delete_cart_product', $cart->id)}}" class="btn btn-danger">Delete</a>
             </div>
            </div>
           </div>
           <?php $total = $total+$cart->price; ?>


           @endforeach
           <div class="col-lg-6" style="left: 50%">
            <h1>Proceed to pay</h1>
            <h1>totalprice: ${{$total}}</h1>


            <a  href="{{url('cash_order')}}" class="btn btn-success">Casn On Delivery</a>
            <a href="{{url('stripe', $total)}}" class="btn btn-success">using Card for payment</a>
          </div>



         <!-- end slider section -->
      </div>





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
