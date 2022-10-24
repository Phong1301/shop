<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::all();
        return view('admin.categories.index', compact('category'));
    }

    public function add(){
        return view('admin.categories.add');
    }

    public function insert(Request $request){
        $category = new Category();
        $category->name = $request->input('name');
        $category->save();
        return redirect('/categories')->with('success', 'Category Added Successfully');
    }

    public function edit($id){
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id){
        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->update();
        return redirect('/categories')->with('success', 'Category Update Successfully');
    }

    public function destroy($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('/categories')->with('success', 'Category Deleted Successfully');
    }
}
