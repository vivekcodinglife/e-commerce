<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\catagory;
use App\Models\Product;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;
use Psy\Command\WhereamiCommand;

class AdminController extends Controller
{
    public function view_catagory(){
        $catagory = Catagory::get();
        return view('admin.catagory', ['catagories'=>$catagory]);
    }

    public function view_product(){
        $catagory = catagory::all();
        return view('admin.product', compact('catagory'));
    }

    public function save_product(Request $request){
        //$request = validate
        $request->validate([
            'title'=>'required',
            'catagory'=>'required',
            'description'=>'required',
            'image' => 'required|mimes:jpg,png,jpeg,gif|max:10000',
            'price'=>'required',
            'quantity'=>'required',
            'discount_price'=>'required'
        ]);
        //store data
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('products'),$imageName);
        $product = new Product;
        $product->image=$imageName;
        $product->title = $request->title;
        $product->catagory=$request->catagory;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->discount_price= $request->discount_price;

        $product->save();
          return back()->withSuccess('message' ,'hey I tell you that you product is add succesfully');





    }
    Public function show_product(){
        $product=Product::get();

        return view('admin.show', ['products'=> $product]);

    }

    public function add_catagory(Request $request){
        $data = new catagory;
        $data->catagory_name = $request->catagory;

        $data->save();

        return redirect()->back()->with('message', 'Catagory Added successfully');

    }
    public function delete_catagory($id){
        $data = catagory::find($id);
        $data->delete();
        return redirect()->back()->with('mess', 'catagory deleted successfully');

    }
    public function delete_product($id){
        $product = Product::where('id', $id)->first();
        $product->delete();
        return redirect()->back()->with('delete_meassage', 'your massage is successfully Deleted ');
    }
    public function update_view($id){
        $product = Product::where('id', $id)->first();
        $catagory = Catagory::get();
        return view('admin.update', ['product'=> $product], compact('catagory'));

    }

    Public function update(Request $request, $id){
        $request->validate([
            'title'=>'required',
            'catagory'=>'required',
            'description'=>'required',

        ]);
        $product = Product::where('id', $id)->first();

          if(isset($request->image)){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('products'),$imageName);
              $product->image=$imageName;

          }

        $product->title = $request->title;
        $product->price = $request->price;
        $product->catagory = $request->catagory;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->discount_price= $request->discount_price;

        $product->update();
          return back();


    }

    public function order_view(){
        $order = Order::get();
        return view('admin.order', compact('order'));
    }
    public function delivered($id){
        $order = Order::find($id);
        $order->delivery_status = "deliverd";
        $order->Payment_status = "paid";

        $order->save();
        return back();

    }
    public function pdf_print($id){
        $order = Order::find($id);

        $pdf= pdf::loadView('admin.pdf', compact('order'));
        return $pdf->download('order_detail.pdf');

    }

    public function searchData(Request $request){


        $searchText = $request->search;
        $order = order::where('name', 'Like', "%$searchText%")->get();
        return view('admin.order', compact('order'));
    }

}

