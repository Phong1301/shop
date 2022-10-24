<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class FEController extends Controller
{
    public function master(){
        $categories = Category::all();
        return view('template.fe.layouts.master', ['categories' => $categories]);
    }

    public function product_by_cate($id){
        $categories = Category::all();
        $product = Product::where('cate_id', $id)->get();
        return view('template.fe.product_by-cate', ['categories' => $categories, 'product' => $product]);
    }

    public function index(){
        $product = Product::all()->take(3);
        $categories = Category::all();
        return view('template.fe.index', ['product' => $product, 'categories' => $categories]);
    }

    public function shop(){
        return view('template.fe.shop');
    }
    
    public function about(){
        return view('template.fe.about');
    }

    public function news(){
        return view('template.fe.news');
    }

    public function contact(){
        return view('template.fe.contact');
    }

    public function cart(){
        return view('template.fe.cart');
    }

    public function fruit(){
        $product_fruit = product::where('cate_id','1')->get();
        return view('template.fe.fruit', compact('product_fruit'));
    }

    public function pizza(){
        $product_pizza = product::where('cate_id','2')->get();
        return view('template.fe.pizza', compact('product_pizza'));
    }

    public function cream(){
        $product_cream = product::where('cate_id','3')->get();
        return view('template.fe.cream', compact('product_cream'));
    }

    public function drinks(){
        $product_drinks = product::where('cate_id','4')->get();
        return view('template.fe.drinks', compact('product_drinks'));
    }
}
