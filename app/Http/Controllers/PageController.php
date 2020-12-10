<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;

class PageController extends Controller
{
    // Front Page 
    public function home(){

        $products = Product::inRandomOrder()->get();
        return view('pages.front-page')->with('products', $products);
    }
    // Products Page 
    public function products(){
        $products = Product::inRandomOrder()->get();
        return view('pages.shop')->with('products', $products);
    }
    // Product Show 
    public function show($slug){
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('pages.product')->with('product',$product);
    }
    // Single Product Page
    public function product(){
        return view('pages.product');
    }
    // Cart Product Page
    public function cart(){
        return view('pages.cart');
    }
    // Cehckout Product Page
    public function checkout(){
        return view('pages.checkout');
    }
    // Thankyou Page
    public function thankyou(){
        return view('pages.thankyou');
    }
}
