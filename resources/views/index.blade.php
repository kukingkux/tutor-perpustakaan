@extends('layouts.app')

@section('title', 'Home')
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/home-user.css')}}">
@endsection

@section('content')

@include('includes.topbar')

<div class="container mb-5">
    <img src="{{asset('assets/img/banner.svg')}}" alt="Banner"  class="img-fluid">
</div>

<div class="container books-list">
    <div class="d-flex justify-content-between mb-4">
        <div class="section-left">
            <h3 class="font-weight-bold text-reset">Buku Populer</h3>
        </div>
        <div class="section-right">
            <a href="#" class="text-decoration-none">Lihat Semua</a>
        </div>
    </div>

    <div class="contents d-flex gap">
        @foreach($books as $b)
        <div class="card content">
            <img src="{{asset('storage/' . $b->cover)}}" alt="vue.js" class="card-img-top">
            <a href="{{route('bookdetails', $b->id)}}" class="text-reset">
            <p class="font-weight-bold">{{$b->title}}</p>
            </a>
            <p class="font-weight-bold">{{$b->author}}</p>
            <p class="text-reset">{{$b->year}}</p>
        </div>
        @endforeach

    </div>
</div>

@endsection
