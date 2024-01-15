<?php

namespace App\Http\Controllers;

use App\Events\ProductPurchased;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Jobs\SendNewProductEmail;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $products = Product::with('category')->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories=Category::all();
        return view('admin.products.create',compact('categories'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Create a new product
        $newProduct = Product::create($request->all());

        // Dispatch the job to send the email
        dispatch(new SendNewProductEmail($newProduct));

        // Redirect with a success message
        return redirect()->route('admin.products.index')->with('success', 'Product created successfully');
    }

    public function edit(Product $product)
    {
        $categories=Category::all();
        return view('admin.products.edit', compact('product','categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product->update($request->all());

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully');
    }

    public function purchase(Product $product){
      event(new ProductPurchased($product));
      return redirect()->back()->with('success', 'Product Stock Updated successfully');;
    }
}
