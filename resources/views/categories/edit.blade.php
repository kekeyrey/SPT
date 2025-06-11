@extends('layouts.app')

@section('content')
<h2>Edit Kategori</h2>
<form method="POST" action="{{ route('categories.update', $category->id) }}">
    @csrf
    @method('PUT')
    <label>Nama Kategori</label><br/>
    <input type="text" name="name" value="{{ $category->name }}" required /><br/><br/>
    <button type="submit">Update</button>
</form>
@endsection