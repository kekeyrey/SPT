@extends('layouts.app')

@section('content')
<h2>Daftar Kategori</h2>
<a href="{{ route('categories.create') }}">Tambah Kategori</a>
@if(session('success'))
    <p>{{ session('success') }}</p>
@endif
<table border="1" cellpadding="8" cellspacing="0">
<tr>
    <th>No</th>
    <th>Nama Kategori</th>
    <th>Aksi</th>
</tr>
@foreach($categories as $index => $category)
<tr>
    <td>{{ $index + 1 }}</td>
    <td>{{ $category->name }}</td>
    <td>
        <a href="{{ route('categories.edit', $category->id) }}">Edit</a>
        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Hapus kategori ini?')">Hapus</button>
        </form>
    </td>
</tr>
@endforeach
</table>
@endsection