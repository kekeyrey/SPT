@extends('layouts.app')

@section('content')
<h2>Edit Produk</h2>
<form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data" style="max-width:600px; display:flex; flex-direction:column;">
    @csrf
    @method('PUT')
    <label>Nama Produk</label>
    <input type="text" name="name" value="{{ $product->name }}" required />

    <label>Deskripsi</label>
    <textarea name="description" required>{{ $product->description }}</textarea>

    <label>Harga</label>
    <input type="text" name="price" value="{{ $product->price }}" required />

    <label>Kategori</label>
<select name="category" required>
    <option value="">--Pilih Kategori--</option>
    <option value="All" {{ $product->category == 'All' ? 'selected' : '' }}>All</option>
    <option value="Bahan Pakan Baku" {{ $product->category == 'Bahan Pakan Baku' ? 'selected' : '' }}>Bahan Pakan Baku</option>
    <option value="Bahan Pakan Jadi" {{ $product->category == 'Bahan Pakan Jadi' ? 'selected' : '' }}>Bahan Pakan Jadi</option>
</select>

    <label>Foto Produk (Kosongkan jika tidak diubah)</label>
    <input type="file" name="image" />

    @if($product->image)
    <img src="{{ asset($product->image) }}" style="width:100px;margin-top:10px;">
    @endif

    <button type="submit" style="margin-top:10px; padding:10px; background-color:#48c6d4; border:none; border-radius:5px; color:#fff;">Update</button>
</form>
<a href="{{ route('products.index') }}" style="margin-top:10px; display:inline-block;">Kembali</a>
@endsection