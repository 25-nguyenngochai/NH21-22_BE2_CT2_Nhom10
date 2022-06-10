<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Catalog;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\Bill;
use App\Models\Bill_Detail;
use App\Models\Comment;

class HomeController extends Controller
{
    // Page
    function index($page="home.index"){
        return view($page);
    }

    // Page Index:
    function indexNew(Request $request)
    {
        $products = Product::orderBy('id', 'desc')->take(8)->get();
        return view('home.index', compact('products'));
    }

    // Page Shop
    function shop(Request $request){
        if(isset($request->catalog_id)){
            $pageAllProducts = Product::where('catalog_id',$request->catalog_id)->orderBy('id', 'desc')
            ->paginate(16)->appends(['catalog_id' => $request->catalog_id]);
        }
        else{
            $pageAllProducts = Product::orderBy('id', 'desc')->paginate(16);
        }
        $allProducts = Product::all();
        $allCatalogs = Catalog::all();
         return view('home.shop', [ 
            'pageAllProducts' => $pageAllProducts,
            'allProducts' => $allProducts,
            'allCatalogs' => $allCatalogs]);
    }

    // Page Product_single
    function product_single(Request $request){
        $productId = Product::where('id',$request->product_id)->get();

        foreach ($productId as $key => $value) {
            $catalog_id = $value->catalog_id;
            $price = $value->price;
        }

        $productRelated = Product::where('catalog_id', $catalog_id)->where('price', $price)->take(4)->get();

        $allComment = DB::table('comments')->join('users', 'comments.user_id', '=', 'users.id')
                                     ->where('comments.product_id', $request->product_id)
                                     ->orderBy('comments.id', 'desc')
                                     ->paginate(3)->appends(['product_id' => $request->product_id]);
                                     
        $countComment = Comment::where('product_id', $request->product_id)->count();
        $countRating = Comment::where('product_id', $request->product_id)->avg('rating');
    
        return view('home.product-single', [ 
            'productId' => $productId,
            'productRelated' => $productRelated,
            'allComment' => $allComment,
            'countComment' => $countComment,
            'countRating' => $countRating
        ]);
    }

    // Page My_seach
    function my_seach(Request $request){
        $seachAll = Product::where('name', 'like', '%'.$request->key.'%')->orderBy('id', 'desc')->paginate(8)->appends(['key' => $request->key]);
        return view('home.my-seach', [ 
            'seachAll' => $seachAll
        ]);
    }
   
    // Page Sinup - Login - Logout:
    function sinup(Request $request)
    {
        $create = User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
        ]);
        return redirect('home.login');
    }

    function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
                return redirect('home.index');
        }else {
            return back()->with('thongbao', 'Đăng nhập thất bại');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('home.index');
    }
    
    // Page Cart:
    function getAddtoCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }
    
    function getDeltoCart($id)
    {
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        session::put('cart', $cart);
        return redirect('home.cart');
    }
    
    function getDeltoCartOne($id)
    {
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        session::put('cart', $cart);
        return redirect('home.cart');
    }

    // Page Checkout:
    function postcheckout(Request $request)
    {
        if (Auth::check()){
            $user = Auth::user()->id;
        }

        $cart = Session::get('cart');
        
        $bill = new Bill;
        $bill->data_order = date('Y-m-d');
        $bill->totalQty = $cart->totalQty;
        $bill->totalPrice = $cart->totalPrice;
        $bill->pay = $request->pay;
        $bill->user_id = $user;
        $bill->save();
        
        foreach ($cart->items as $key => $value) {
            $bill_detail = new Bill_Detail;
            $bill_detail->bill_id = $bill->id;
            $bill_detail->product_id = $key;
            $bill_detail->quantity = $value['qty'];
            $bill_detail->price = $value['price']/$value['qty'];
            $bill_detail->save();
        }

        Session::forget('cart');
        return redirect('home.index')->with('thongbao', 'Đặt hàng thành công');
    }

    // Page Order_History:
    function history(Request $request)
    {
        $history = DB::table('bills')->where('bills.user_id',$request->user_id)
                                     ->orderBy('bills.id', 'desc')
                                     ->paginate(5)->appends(['user_id' => $request->user_id]);
        
        $exhistory = DB::table('bills')->exists();
        
        return view('home.order_history', [ 
            'history' => $history,
            'exhistory' => $exhistory
        ]);
    }

    // Page History:
    function gethistory($id)
    {
        $allDetailBill = DB::table('products')->join('bill_details', 'products.id', '=', 'bill_details.product_id')
                                                  ->where('bill_details.bill_id',$id)
                                                  ->get();

        return view('home.history', [ 
            'allDetailBill' => $allDetailBill
            ]);
    }

    // Page Review - Comment:
    function getreview($id)
    {
        $product = Product::find($id);
        $bill_details = DB::table('products')->join('bill_details', 'products.id', '=', 'bill_details.product_id')
                                                ->where('bill_details.product_id',$id)
                                                ->get();
        $comments = DB::table('comments')->join('bill_details', 'comments.bill_detail_id', '=', 'bill_details.id')
                                                 ->where('bill_details.product_id',$id)
                                                 ->get();
        return view('home.review', compact('product', 'bill_details', 'comments'));
    }

    function comment_rating(Request $request)
    {
        if (Auth::check()){
            $user = Auth::user()->id;
        }
        
        Comment::insert([
            'comment_content' => $request->comment,
            'rating' => $request->number,
            'product_id' => $request->product_id,
            'user_id' => $user,
            'data_comment'=> date('Y-m-d'),
            'bill_detail_id' => $request->bill_detail_id,
            'status' => 'commented',
        ]);

        return redirect('home.shop');
    }
}