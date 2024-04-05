
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
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="id">Product id</th>
                        <th>Title</th>
                        <th>image</th>
                        <th>price</th>
                        <th>discription</th>
                        <th>quantity</th>
                        <th>catagory</th>
                        <th>Discount price</th>
                        <th >Delete</th>
                        <th>Update</th>
                      </tr>
                    </thead>
                    <tbody>


                        @foreach ($products as $product )
                          <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$product->title}}</td>
                        <td><img src="products/{{$product->image}}" class="rounded-circle" width="50px" height="50px"></td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->catagory}}</td>
                        <td>{{$product->discount_price}}</td>
                        <td ><a href="{{url('product_delete', $product->id)}}" class="btn btn-danger">Delete</a></td>
                            <td> <a href="{{url('product_update', $product->id)}}"  class="btn btn-success">Update</a></td>




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
