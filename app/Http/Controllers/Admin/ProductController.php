<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    public function index(){
        $product = Product::all();
        return view('admin.products.index', compact('product'));
    }

    public function add(){
        $category = Category::all();
        return view('admin.products.add', compact('category'));
    }

    public function insert(Request $request){
        $product = new Product();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('template/admin/img/upload/product',$filename);
            $product->image = $filename;
        }
        $product->cate_id       =   $request->input('cate_id');
        $product->name          =   $request->input('name');
        $product->description   =   $request->input('description');
        $product->price         =   $request->input('price');
        $product->qty           =   $request->input('qty');
        $product->save();
        return redirect('products')->with('success', 'Product Added Successfully');
    }

    public function edit($id){
        $product = Product::find($id);
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, $id){
        $product = Product::find($id);
        if($request->hasFile('image')){

            $path = 'template/admin/img/upload/product/'.$product->image;
            if(File::exists($path)){
                File::delete($path);
            } 
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('template/admin/img/upload/product',$filename);
            $product->image = $filename;
            
        }
        $product->name          =   $request->input('name');
        $product->description   =   $request->input('description');
        $product->price         =   $request->input('price');
        $product->qty           =   $request->input('qty');
        $product->update();

        return redirect('products')->with('success', 'Product Updated Successfully');
    }

    public function destroy($id){
        $product = Product::find($id);

        $path = 'template/admin/img/upload/product/'.$product->image;
            if(File::exists($path)){
                File::delete($path);
            } 

        $product->delete();
        return redirect('products')->with('success', 'Product Deleted Successfully');
    }   
}
