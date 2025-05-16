<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('admin-panel.products.list' , compact('products'));
    }
    public function create()
    {
        $categories = Category::all();
        $sub_categories = SubCategory::all();
        return view('admin-panel.products.create' , compact('categories', 'sub_categories'));
    }
    public function store(Request $request)
    {
        if($request->file('image')) {
            $image = $request->file('image');
            $img_name = time().rand(10000, 99999). $image->getClientOriginalExtension();
            $image->move('uploads/products/', $img_name);
        }

        $product = new Product;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->image = $img_name ?? null;   
        $product->save();
        return redirect()->route('products/list');

       
    }
}
