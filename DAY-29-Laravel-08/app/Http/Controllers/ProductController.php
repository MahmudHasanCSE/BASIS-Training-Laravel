<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    protected $product;
    protected $products;
    public function index()
    {
        return view('product.add');
    }

    public function create(Request $request)
    {
//        $this->product = new Product();
        Product::newProduct($request);
        return redirect('/add-product')->with('message', 'Product information saved successfully!');
    }

    public function manage()
    {
        $this->products = Product::orderBy('id', 'desc')->get(); //method chaining
        return view('product.manage-product', [
            'products' => $this->products,
        ]);
    }

    public function edit($id)
    {
        $this->product = Product::find($id);
        return view('product.edit-product', ['product' => $this->product]);
    }

    public function update(Request $request, $id)
    {
        $this->product = Product::find($id);
        $this->product->name        = $request->name;
        $this->product->category    = $request->category;
        $this->product->brand       = $request->brand;
        $this->product->price       = $request->price;
        $this->product->description = $request->description;
        $this->product->image       = $request->file('image');
        $this->product->save();

        Product::updateProduct($request, $id);
        return redirect('/manage-product')->with('message', 'Product information updated successfully!');
    }

    public function delete($id)
    {
        $this->product = Product::find($id);
        $this->product->delete();
        return redirect('/manage-product')->with('message', 'Product information deleted successfully!');

    }
}
