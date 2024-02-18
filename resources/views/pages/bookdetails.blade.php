@extends('layouts.app')

@section('title', 'Katalog')
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/bookdetails.css')}}">
@endsection

@section('content')

@include('includes.topbar')

<div class="d-flex px-5 mx-5">
    <div class="side-content">
        <div class="p-4">
            <div class="card-body"> <img src="{{asset('storage/' . $book->cover)}}" alt="vue.js" class="card-img-top"></div>
                <p class="font-weight-bold">{{$book->title}}</p>
                <p class="font-weight-bold">{{$book->author}}</p>
                <p class="font-weight-bold">{{$book->publisher}}</p>
                <p class="text-reset">{{$book->year}}</p>
                <p class="text-reset">{{$book->isbn}}</p>
        </div>

        <div class="navbar-nav font-weight-bold gap">
            <button type="button" class="btn btn-primary px-4" data-toggle="modal" data-target="#exampleModal">Pinjam Buku</button>
        </div>
    </div>
    <div class="content">
        <p class="text-reset">{{$book->description}}</p>
    </div>
</div>
@include('includes.modalpinjam')
@endsection
