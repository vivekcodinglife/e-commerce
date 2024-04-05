<header class="header_section">
    <div class="container">
       <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html"><img width="250" src="images/logo.png" alt="#" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav">
                <li class="nav-item active">
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
                <li class="nav-item">
                    <a class="nav-link" href="{{url('cart')}}">Cart</a>
                 </li>


                <form  style="display:flex">
                    <form action="{{url('Searchproduct')}}" method="get">
                      <input type="text" name="search" placeholder="search product" style="border-radius: 10px; padding:0 4px">
                   <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                   <i class="fa fa-search" aria-hidden="true"></i>
                   </button>
                    </form>

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
