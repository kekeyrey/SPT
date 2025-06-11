@extends('layouts.app')

@section('content')
<h1>Daftar Produk</h1>
<a href="{{ route('products.create') }}" class="add-button" style="background-color:#48c6d4; padding:10px 15px; border-radius:5px; color:#fff; text-decoration:none;">Tambah Produk</a>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="product-table" border="1" cellpadding="10" cellspacing="0" style="width:100%; margin-top:20px;">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Produk</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Kategori</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $index => $product)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->kategori }}</td>
             
            <td>
                @if($product->image)
                <img src="{{ asset($product->image) }}" class="product-image" style="width:100px; height:auto;" />
                @endif
            </td>
            <td>
                <a href="{{ route('products.edit', $product->id) }}" class="action-button edit-button">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="action-button delete-button" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection