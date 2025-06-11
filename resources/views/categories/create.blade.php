@extends('layouts.app')

@section('content')
<h2>Tambah Kategori</h2>
<form method="POST" action="{{ route('categories.store') }}">
    @csrf
    <label>Nama Kategori</label><br/>
    <input type="text" name="name" required /><br/><br/>
    <button type="submit">Simpan</button>
</form>
@endsection