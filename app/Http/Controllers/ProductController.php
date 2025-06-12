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
    // Halaman list produk untuk umum (homepage)
    public function homenon()
    {
        try {
            $products = Product::with('category')->get();
            return view('homenon', compact('products'));
        } catch (\Exception $e) {
            // Jika ada error, return view dengan products kosong
            $products = collect();
            return view('homenon', compact('products'));
        }
    }

    // Tampilkan semua produk (admin)
    public function index()
    {
        $products = Product::with('category')->paginate(10);
        return view('products.index', compact('products'));
    }

    // Form tambah produk
    public function create(): View
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    // Simpan produk baru
    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'price' => 'required|numeric|min:0',
                'komposisi' => 'required|string',
                'petunjuk_pemakaian' => 'required|string',
                'category_id' => 'required|exists:categories,id',
                'minimal_order' => 'required|string',
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
            return back()->with('error', 'Gagal menyimpan produk: ' . $e->getMessage());
        }
    }

    // Form edit produk
    public function edit($id): View
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    // Update produk
    public function update(Request $request, $id)
    {
        DB::beginTransaction();

        try {
            $product = Product::findOrFail($id);

            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'price' => 'required|numeric|min:0',
                'komposisi' => 'required|string',
                'petunjuk_pemakaian' => 'required|string',
                'category_id' => 'required|exists:categories,id',
                'minimal_order' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048'
            ]);

            if ($request->hasFile('image')) {
                // Hapus gambar lama jika ada
                if ($product->image) {
                    Storage::delete('public/products/' . $product->image);
                }

                $validated['image'] = $this->uploadImage($request->file('image'));
            }

            $product->update($validated);

            DB::commit();

            return redirect()->route('products.index')
                ->with('success', 'Produk berhasil diperbarui');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal memperbarui produk: ' . $e->getMessage());
        }
    }

    // Hapus produk
    public function destroy($id)
    {
        try {
            $product = Product::findOrFail($id);

            // Hapus gambar dari storage jika ada
            if ($product->image) {
                Storage::delete('public/products/' . $product->image);
            }

            $product->delete();

            return redirect()->route('products.index')
                ->with('success', 'Produk berhasil dihapus');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menghapus produk: ' . $e->getMessage());
        }
    }

    // Fungsi bantu upload gambar
    protected function uploadImage($file)
    {
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/products', $filename);
        return $filename;
    }
}