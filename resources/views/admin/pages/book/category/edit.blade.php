@extends('layouts.app')

@section('title', 'Edit Kategori')

@section('content')
<form action="{{ route('kategori.update', $category->id )}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label class="form-label">Judul Kategori</label>
      <input type="text" class="form-control @error('category') is-invalid @enderror" name="category"
      value="{{ $category->category }}">
        @error('category')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

  </form>
@endsection
