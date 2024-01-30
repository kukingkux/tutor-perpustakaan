@extends('admin.layouts.app')

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
        <td>{{$book->category->category}}</td>
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



<div class="d-block mt-5">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Category</h1>
    </div>
    <div class="wrapper d-flex justify-content-end align-items-center pe-5">
        <div>
            <a href="{{route('kategori.create')}}">
            <button data-bs-target="#OfficeCreate" data-bs-toggle="modal" type="button" class="btn btn-primary">
                Tambah Kategori
            </button>
            </a>
        </div>
    </div>
    <div class="wrapper d-flex justify-content-start gap-2 pb-3 flex-wrap" style="border-radius: 0px 0px 8px 8px">

        @foreach ($categories as $data)
            <div class="card m-auto" style="width: 18rem;">

                <div class="card-body">
                    <h5 class="card-title">{{ $data->category}}</h5>

                    <a href="{{route('kategori.edit', $data->id)}}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{route('kategori.destroy', $data->id)}}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>

                </div>

            </div>
        @endforeach
    </div>
</div>
@endsection
