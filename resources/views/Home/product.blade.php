<section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
             Our <span>products</span>
          </h2>
       </div>
       <div class="row">
        @foreach ($product as $products)


       <div class="col-sm-6 col-md-4 col-lg-4">
             <div class="box">
                <div class="option_container">
                   <div class="options">
                      <a href="{{url('product_detail', $products->id)}}" class="option1">
                        Product Detail
                      </a>

                     <form action="{{url('add_cart', $products->id)}}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-md-4">
                                <input type="number" name="quantity" value="1" min="1" style="border-radius: 40px">

                            </div>
                            <div class="col-md-4">
                                <input class="option2" type="submit" value="Add To Cart" style="border-radius: 40px;">

                            </div>

                        </div>


                     </form>

                   </div>
                </div>
                <div class="img-box">
                   <img src="products/{{$products->image}}" alt="">
                </div>
                <div class="detail-box">
                   <h5>
                    {{$products->title}}
                   </h5>
                   @if($products->discount_price!=null)
                   <h6 style="color: rgb(92, 48, 48)">
                     Discount
                     <br>
                     {{$products->discount_price}}
                  </h6>
                  <h6 style="text-decoration: line-through; color: rgb(105, 105, 168);">
                    {{$products->price}}
                 </h6>
                 @else
                 <h6 style="color: rgb(105, 105, 168);">{{$products->price}}</h6>

                   @endif

                </div>
             </div>
          </div>
          @endforeach

       </div>
       <div class="btn">
          <a href="">
              {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}

          </a>
       </div>
    </div>
 </section>
