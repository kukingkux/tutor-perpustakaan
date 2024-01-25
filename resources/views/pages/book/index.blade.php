@extends('layouts.app')

@section('title', 'Data Buku')

@section('content')
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Judul Buku</th>
        <th scope="col">Penulis</th>
        <th scope="col">Penerbit</th>
        <th scope="col">Tahun Terbit</th>
        <th scope="col">ISBN</th>
        <th scope="col">Cover</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Kategori</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
      <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$book->title}}</td>
        <td>{{$book->author}}</td>
        <td>{{$book->publisher}}</td>
        <td>{{$book->year}}</td>
        <td>{{$book->isbn}}</td>
        <td>
            <img src="{{asset('storage/' . $book->cover)}}" alt="{{$book->title}}" width="100px">
        </td>
        <td>{{$book->description}}</td>
        <td>{{$book->category}}</td>
        <td nowrap>
            <a href="{{route('buku.edit', $book->id)}}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{route('buku.destroy', $book->id)}}" method="POST" class="d-inline">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

    <a href="{{route('buku.create')}}">
        <button class="btn btn-primary">Tambah Buku</button>
    </a>
    <a href="{{route('export')}}">
        <button class="btn btn-success">Download Report Data Buku</button>
    </a>
@endsection
