<!DOCTYPE html>
<html>
   <head>
    <base href="/public">
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
         @include('Home.Header')

         <!-- end header section -->
         <!-- slider section -->
         <div class="row-cols-2">
            <div class="card" style="width: 18rem;">
                <img src="products/{{$product->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$product->catagory}}</h5>
                  <p class="card-text">{{$product->description}}</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">{{$product->title}}</li>
                  @if($product->discount_price!=null)
                  <li style="text-decoration: line-through" class="list-group-item">{{$product->price}}</li>
                  <li class="list-group-item">{{$product->discount_price}}</li>
                  @else
                  <li class="list-group-item">{{$product->price}}</li>
                  @endif
                </ul>
                <div class="card-body">
                  <a href="#" class="btn btn-primary">Card link</a>
                  <a href="#" class="btn btn-secondary">Another link</a>
                </div>
              </div>
         </div>

</div>  <!-- end slider section -->

      <!-- why section -->

      <!-- end client section -->
      <!-- footer start -->

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
