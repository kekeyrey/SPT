@extends('layouts.app')

@section('content')
<div class="d-flex" style="min-height: 100vh;">
    <!-- Sidebar -->
    <div class="bg-dark text-white p-4" style="width: 250px;">
        <h4 class="mb-4">SPT</h4>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('products.index') }}">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">User</a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-grow-1 p-4" style="background-color: #f8f9fa;">
        <h1 class="mb-4">Daftar Produk</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @elseif (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <!-- Tombol Tambah Produk -->
        <div class="mb-3 text-end">
            <a href="{{ route('products.create') }}" class="btn btn-success">+ Tambah Produk</a>
        </div>

        <!-- Daftar Produk -->
        <div class="row">
            @forelse ($products as $product)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        @if ($product->image_url)
                            <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}">
                        @else
                            <img src="https://via.placeholder.com/300x200?text=No+Image" class="card-img-top" alt="No image">
                        @endif

                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ \Illuminate\Support\Str::limit($product->description, 100) }}</p>
                            <p class="card-text"><strong>Harga:</strong> Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                            <p class="card-text"><strong>Kategori:</strong> {{ $product->category->name ?? 'Tidak ada kategori' }}</p>
                            <p class="card-text"><strong>Komposisi:</strong> {{ $product->komposisi }}</p>
                            <p class="card-text"><strong>Petunjuk Pemakaian:</strong> {{ $product->petunjuk_pemakaian }}</p>
                            <p class="card-text"><strong>Minimal Order:</strong> {{ $product->minimal_order }}</p>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">Detail</a>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center">Belum ada produk tersedia.</p>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center">
            {{ $products->links() }}
        </div>
    </div>
</div>
@endsection
