<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products', compact('products'));
    }

    public function createProduct()
    {
        return view('admin.sub-pages.create_products');
    }
    public function edit($id = null)
    {
        if ($id) {
            $product = Product::find($id);
    
            if ($product) {
                return view('admin.sub-pages.edit_products', compact('product'));
            }
        }
    
        // If no ID or invalid ID
        return redirect()->route('admin.products')->with('error', 'Product not found or invalid ID');
    }
    
    public function update(Request $request, $id)
{
    // Validate the incoming request
    $request->validate([
        'name' => 'required|string|max:255',
        'quantity' => 'required|integer|min:0',
        'size' => 'required|string|max:10',
        'price' => 'required|integer|min:0',
        'loc' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048', // Optional image field
    ]);

    // Find the product by its ID
    $product = Product::findOrFail($id);

    // Handle file upload if an image is provided
    $imagePath = $product->loc; // Keep the old image if no new one is uploaded
    if ($request->hasFile('loc')) {
        $image = $request->file('loc');
        $imageName = time() . '_' . Str::random(5) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('product_images'), $imageName);  // Move to public/product_images/
        $imagePath = 'product_images/' . $imageName;  // Save the relative path to DB
    }

    // Update product information
    $product->update([
        'name' => $request->name,
        'quantity' => $request->quantity,
        'size' => $request->size,
        'price' => $request->price,
        'loc' => $imagePath,  // Update the product image path
    ]);

    // Redirect back to products page with success message
    return redirect()->route('admin.products')->with('success', 'Product updated successfully.');
}

public function destroy($id)
{
    $product = Product::findOrFail($id);
    $product->delete();
    return redirect()->route('admin.products')->with('success', 'Product deleted successfully.');
}


    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:0',
            'size' => 'required|string|max:10',
            'price' => 'required|integer|min:0',
            'loc' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048', // Ensure it's an image file
        ]);
    
        // Handle file upload
        $imagePath = null;
        if ($request->hasFile('loc')) {
            $image = $request->file('loc');
            $imageName = time() . '_' . Str::random(5) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('product_images'), $imageName);  // Move to public/product_images/
            $imagePath = 'product_images/' . $imageName;  // Save the relative path to DB
        }
    
        // Save product to database
        Product::create([
            'id' => strtoupper(Str::random(4)),
            'name' => $request->name,
            'quantity' => $request->quantity,
            'size' => $request->size,
            'price' => $request->price,
            'loc' => $imagePath,  // Save the path of the uploaded image
        ]);
    
        // Redirect back with success message
        return redirect()->route('admin.products')->with('success', 'Product added successfully.');
    }
    
    
}
