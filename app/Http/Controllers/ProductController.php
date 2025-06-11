<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::with('category')->paginate(10);
        return view('products.index', compact('products'));
    }

    public function create(): View
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'price' => 'required|numeric|min:0',
                'category_id' => 'required|exists:categories,id',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048'
            ]);

            if ($request->hasFile('image')) {
                $validated['image'] = $this->uploadImage($request->file('image'));
            }

            Product::create($validated);
            
            DB::commit();
            
            return redirect()->route('products.index')
                            ->with('success', 'Produk berhasil disimpan');
                            
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal menyimpan produk: '.$e->getMessage());
        }
    }

    // ... (method lainnya tetap sama dengan tambahan return type)
}