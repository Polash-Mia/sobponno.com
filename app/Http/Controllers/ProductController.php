<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubImage;

class ProductController extends Controller
{
    private $products;
    public function index()
    {
        $this->categories=Category::all();
        return view('admin.product.index',['categories'=>$this->categories]);
    }

    public function create(Request $request)
    {
        $this->product = Product::newProduct($request);
        SubImage::newSubImage($this->product, $request->file('sub_image'));
        return redirect()->back()->with('message', 'Product info create successfully.');
    }

    public function manage()
    {
        $this->category = Category::all();
        $this->products  = Product::all();
        return view('admin.product.manage',[
            'products'=> $this->products,
            'category'=> $this->category,
         ]);
    }

    public function detail($id)
    {
        $this->product = Product::find($id);
        return view('admin.product.detail', ['product' => $this->product]);
    }

    public function edit($id)
    {
        $this->product = Product::find($id);
        return view('admin.product.edit', [
            'product'       => $this->product,
            'categories'    => Category::all(),
            
        ]);
    }


    public function update(Request $request, $id)
    {
        $this->product = Product::updateProduct($request, $id);

        if ($request->file('sub_image'))
        {
            SubImage::updateSubImage($this->product, $request->file('sub_image'));
        }
        return redirect('/product/manage')->with('message', 'Product info update successfully.');
    }

    public function delete($id)
    {
        Product::deleteProduct($id);
        SubImage::deleteSubImage($id);
        return redirect('/product/manage')->with('message', 'Product info delete successfully.');
    }
}
