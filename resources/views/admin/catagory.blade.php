
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type = text/css>
    .div-center{
        text-align: center;
        padding-top: 30px;
    }
    .h2_font{
        font-size: 40px;
        padding-bottom: 40px;
    }
    .input_color{
        color:black;
    }

    </style>

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
                @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="close" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>

                @endif
                @if (session()->has('mess'))
                <div class="alert alert-danger">
                    <button type="close" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('mess')}}
                </div>

                @endif
                <div class="div-center pb-2">
                    <h3 class="h2_font">Add Catagory </h3>
                    <form action="{{url('/add_catagory')}}" method="Post">
                        @csrf
                        <input class="input_color" type="text" name="catagory"
                        placeholder="write catagory name">
                        <input type="submit" class="btn btn-success" name="submit"
                        value="add to catagory">
                    </form>


                  </div>
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="id">catagory_id</th>
                        <th scope="catagory_name">catagory</th>

                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>


                        @foreach ($catagories as $catagory )
                          <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$catagory->catagory_name}}</td>

                        <td><a onclick="return confirm('are u sure to  Delete this')" href="{{url( 'delete_catagory', $catagory->id)}}" class="btn btn-danger btn-small">Delete</a></td>
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
