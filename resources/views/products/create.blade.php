@extends('layouts.app')

@section('content')
<h2>Tambah Produk</h2>
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" style="max-width:600px; display:flex; flex-direction:column;">
    @csrf
    <label>Nama Produk</label>
    <input type="text" name="name" required />

    <label>Deskripsi</label>
    <textarea name="description" required></textarea>

    <label>Harga</label>
    <input type="text" name="price" required />

    <label>Kategori</label>
<select name="category" required>
    <option value="">--Pilih Kategori--</option>
    <option value="All">All</option>
    <option value="Bahan Pakan Baku">Bahan Pakan Baku</option>
    <option value="Bahan Pakan Jadi">Bahan Pakan Jadi</option>
</select>

    <label>Foto Produk</label>
    <input type="file" name="image" />

    <button type="submit" style="margin-top:10px; padding:10px; background-color:#48c6d4; border:none; border-radius:5px; color:#fff;">Simpan</button>
</form>
<a href="{{ route('products.index') }}" style="margin-top:10px; display:inline-block;">Kembali</a>
@endsection