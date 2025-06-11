<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
{
    // Pastikan menggunakan with() untuk eager loading
    // $products = \App\Models\Product::with('category')->get();
    $products= Product::join('categories', 'products.category_id', '=', 'categories.id')
    ->select('products.*','categories.name as kategori')
    ->get();

    // Debug data
    // dd($products);

    return view('products.index', compact('products'));
}

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
            'category_id'=>'nullable|exists:categories,id',
            'image'=>'nullable|image|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/images');
            $data['image'] = $path;
        }

        Product::create($data);

        return redirect()->route('products.index')->with('success','Produk berhasil disimpan');
    }

    public function show($id)
    {
        // optional, jika tidak digunakan bisa dihapus
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('products.edit', compact('product','categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
            'category_id'=>'nullable|exists:categories,id',
            'image'=>'nullable|image|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            // hapus gambar lama jika perlu
            if ($product->image) {
                \Storage::delete($product->image);
            }
            $path = $request->file('image')->store('public/images');
            $data['image'] = $path;
        } else {
            unset($data['image']);
        }

        $product->update($data);
        return redirect()->route('products.index')->with('success','Produk berhasil diupdate');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->image) {
            \Storage::delete($product->image);
        }
        $product->delete();
        return redirect()->route('products.index')->with('success','Produk berhasil dihapus');
    }
}