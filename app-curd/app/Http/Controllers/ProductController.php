<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // model is named 'Product'

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Retrieve all products from the database
        $products = Product::all();

        // Render the 'products.index' view, passing the products as a variable
        return view('products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new product.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Render the 'products.create' view for creating a new product
        return view('products.create');
    }

    /**
     * Store a newly created product in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'description' => 'nullable',
        ]);

        // Create a new product with the validated data
        $newProduct = Product::create($data);

        // Redirect to the 'product.index' route after successfully storing the product
        return redirect(route('product.index'));
    }

    /**
     * Show the form for editing the specified product.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\View\View
     */
    public function edit(Product $product)
    {
        // Render the 'products.edit' view for editing the specified product
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified product in the database.
     *
     * @param  \App\Models\Product  $product
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Product $product, Request $request)
    {
        // Validate the incoming request data
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'description' => 'nullable',
        ]);

        // Update the product with the validated data
        $product->update($data);

        // Redirect to the 'product.index' route after successfully updating the product
        return redirect(route('product.index'))->with('success', 'Product Updated Successfully');
    }

    /**
     * Remove the specified product from the database.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Product $product)
    {
        // Delete the specified product from the database
        $product->delete();

        // Redirect to the 'product.index' route after successfully deleting the product
        return redirect(route('product.index'))->with('success', 'Product Deleted Successfully');
    }
}
