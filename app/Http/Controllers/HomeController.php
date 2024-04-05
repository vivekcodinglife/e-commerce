<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Product;

use App\Models\Cart;
use Stripe;
use Charge;




use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

use App\Models\Order;

class HomeController extends Controller
{
  public function index(){
    $product = Product::paginate(10);
    return view('Home.userpage', compact('product'));
  }
  public function Product_page(){
    return view('Home.products');
  }
  public function blog_view(){
    return view('Home.blog');
  }
  public function testimonal_view(){
    return view('Home.testimonial');
  }

  public function contact_view(){
    return view ('Home.contact');
  }
  public function About_view(){
    return view('Home.about');
  }


  public function redirect(){

    $usertype = Auth::user()->usertype;

    if($usertype == '1'){
        return view('admin.home');
    }
    else{
        $product = Product::paginate(10);
        return view('Home.userpage', compact('product'));
    }
  }
  public function product_detail($id){
    $product = Product::where('id', $id)->first();

    return view('Home.product_detail', compact('product'));
  }
     public function AddCart(Request $request,$id)
     {
        if(Auth::id()){
            $user = Auth::user();
            $product = product::find($id);
            $cart = new cart();
            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->product_title=$product->title;

            $cart->quantity=$request->quantity;
            if($product->discount_price != null)
            {

                    $cart->price=$product->discount_price;


            }
            else{

                $cart->price=$product->price;
            }


            $cart->image= $product->image;
            $cart->Product_id= $product->id;
            $cart->user_id= $user->id;

            $cart->save();

            return redirect()->back();


        }
        else{
            return redirect('login');
        }

     }
     public function CartView(){
        if(Auth::id()){
            $id = Auth::user()->id;
        $cart = Cart::where('user_id', '=' , $id)->get();
        return view('Home.cart', compact('cart'));

        }
        else{
            return redirect ('login');
        }

     }
     public function deleteCartProduct($id){
        $cart = cart::find($id);
        $cart->Delete();
        return back()->with('delete_meassage', 'product Succesfully Deleted');
     }

     public function CashOrder(){

        $user = Auth::user();
        $userid = $user->id;
        $data = Cart::where("user_id", "=" , $userid)->get();
        foreach($data as $data){
            $order = new order;
            $order->name = $data->name;
            $order->email = $data->email;
            $order->phone = $data->phone;
            $order->product_title = $data->product_title;
            $order->address = $data->address;
            $order->user_id = $data->user_id;
            $order->Product_id = $data->Product_id;
            $order->price = $data->price;
            $order->image = $data->image;
            $order->quantity = $data->quantity;

            $order->Payment_status = 'cash_on_delivery';

            $order->delivery_status = 'processing';

            $order->save();

            $cart_id = $data->id;

            $cart  = Cart::find($cart_id);

            $cart->delete();




        }

        return redirect()->back();
     }

     public function stripe($total){


        return view('home.stripe', compact('total'));
     }


     public function stripePost(Request $request): RedirectResponse
     {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create([
                 "amount" => 10 * 100,
                 "currency" => "inr",
                 "source" => $request->stripeToken,
                 "description" => "Thanks for Payment"
         ]);

         return back()
                 ->with('success', 'Payment successful!');
     }


     public function searchproduct(Request $request){
       $searchText = $request->search;
       $product = product::where('title', 'LIKE', "%$searchText%")->get();

       return view ('Home.products', compact('product'));
     }

     public function about(){
        $product = Product::get();
        return view('Home.newfile',['product'=>$product], compact('product'));
     }

}
