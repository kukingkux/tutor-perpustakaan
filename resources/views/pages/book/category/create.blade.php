@extends('layouts.app')

@section('title', 'Tambah Kategori')

@section('content')
<form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label class="form-label">Nama Kategori</label>
      <input type="text" class="form-control @error('category') is-invalid @enderror" name="category">
        @error('category')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

  </form>
@endsection
