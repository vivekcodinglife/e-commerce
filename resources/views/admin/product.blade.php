

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        label{
            color: white;
        }
        input{
            color: white;
            border-radius: 20px;
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
                <div class="container">
                    <div class="container-fluid ">
                        <div class="row justify-content-center">
                            <div class="col-sm-5">
                                <div class="card mt-3 p-3">
                                     <form method="POST" action="{{url('save_product')}}" enctype="multipart/form-data">
                                        @method("post")
                                    @csrf
                                    <div class="form-group ">
                                        <label>Product title</label>
                                        <input  name="title" class="form-control" value="{{old('title')}}">
                                        @if ($errors->has('title'))
                                        <span class="text-danger">{{$errors->first('title')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group ">
                                        <label>Product Catagory</label>
                                        <select  name="catagory" class="form-control" value="{{old('catagory')}}">
                                         <option value="" selected="">Add catagory</option>
                                         @foreach ($catagory as $catagory)
                                           <option>{{$catagory->catagory_name}}</option>
                                         @endforeach

                                    </select>
                                        @if ($errors->has('catagory'))
                                        <span class="text-danger">{{$errors->first('catagory')}}</span>
                                        @endif
                                    </div>

                                    <div class="form-group ">
                                        <label>Product Quantity</label>
                                        <input  name="quantity" class="form-control" value="{{old('quantity')}}">
                                        @if ($errors->has('quantity'))
                                        <span class="text-danger">{{$errors->first('quantity')}}</span>
                                        @endif
                                    </div>

                                    <div class="form-group ">
                                        <label>Product price</label>
                                        <input name="price" class="form-control" value="{{old('price')}}">
                                        @if ($errors->has('price'))
                                        <span class="text-danger">{{$errors->first('price')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group ">
                                        <label>Phone number</label>
                                        <input name="Phone number" class="form-control" value="{{old('number')}}">
                                        @if ($errors->has('number'))
                                        <span class="text-danger">{{$errors->first('number')}}</span>
                                        @endif
                                    </div>

                                    <div class="form-group ">
                                        <label>Product Dis_price</label>
                                        <input  name="discount_price" class="form-control" value="{{old('discount_price')}}">
                                        @if ($errors->has('discount_price'))
                                        <span class="text-danger">{{$errors->first('discount_price')}}</span>
                                        @endif
                                    </div>

                                    <div class="form-group ">
                                        <label>Description</label>
                                        <textarea name="description"  rows="6" class="form-control" value="{{old('description')}}"></textarea>
                                        @if ($errors->has('description'))
                                           <span class="text-danger">{{$errors->first('description')}}</span>
                                         @endif

                                    </div>
                                    <div class="form-group ">
                                        <label>Product image</label>
                                        <input type="file" name="image"  rows="6" class="form-control" value="{{old('image')}}">
                                        @if ($errors->has('image'))
                                        <span class="text-danger">{{$errors->first('image')}}</span>

                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-success mt-2">Submit</button>
                                </form>
                            </div>

                            </div>
                        </div>
                    </div>
            </div>
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

