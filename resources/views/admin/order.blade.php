
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')


  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      @include('admin.slidebar')
      <!-- partial -->
     @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @if(session()->has('delete_meassage'))
                <div class="alert alert-danger">
                    <button class="close" type="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('delete_meassage')}}

                </div>
                @endif

                <div style=" padding-left:400px; padding-bottom: 30px;" >
                    <form action="{{url('search')}}" method="get">
                        <input type="text" name="search" placeholder="search for something" style="color: black">
                        <input type="submit" value="search" class="btn btn-outline-primary">
                    </form>
                </div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="id">Product id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>address</th>
                        <th>phone</th>
                        <th>Title</th>
                        <th>image</th>
                        <th>price</th>
                        <th>Delivery Status</th>


                        <th>payment Status</th>
                        <th>deliver</th>
                        <th>Print</th>

                      </tr>
                    </thead>
                    <tbody>


                        @foreach ($order as $order )
                          <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$order->name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->product_title}}</td>
                        <td><img src="products/{{$order->image}}" class="rounded-circle" width="50px" height="50px"></td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->delivery_status}}</td>



                        <td>{{$order->Payment_status}}</td>
                        @if($order->delivery_status == 'processing')
                        <td>
                            <a href="{{url('delivered', $order->id)}}" onclick="return confirm('are u sure this product is delivered')" class="btn btn-primary">Delivered</a>
                        </td>
                        @else
                        <td><p>delivered</p></td>
                        @endif
                        <td><a href="{{url('pdf_print', $order->id)}}" class="btn btn-primary">&downarrow;</a></td>




                      </tr>
                      @endforeach

                    </tbody>
                  </table>
            </div>
        </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.javascript')
    <!-- End custom js for this page -->
  </body>
</html>
