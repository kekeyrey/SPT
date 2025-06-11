@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Produk</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="row">
        @foreach ($products as $product)
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
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center">
        {{ $products->links() }}
    </div>
</div>
@endsection
