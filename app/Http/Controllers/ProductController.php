<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('otm.product.index', ['products' => $products]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('otm.product.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $category = Category::findOrfail($request->category);
        $category->products()->create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'price' => $request->price,
        ]);
        return redirect(route('products.index'))->with('message', 'successfylly created');
    }



    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::where('id', $id)->first();
        return view('otm.product.edit', ['product' => $product, 'categories' => $categories]);
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($request->category);
        $category->products()->where('id', $id)->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'price' => $request->price,
        ]);

        return redirect(route('products.index'))->with('message', 'successfylly updated product');
    }
}

