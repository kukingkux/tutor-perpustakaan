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
        <div class="content">
            <p class="font-weight-bold"><span>Vue JS: </span>Sentuhan Ajaib untuk Antarmuka Pengguna yang Lebih Hidup!✨✨</p>
            <img src="{{asset('assets/img/vue-js.svg')}}" alt="vue.js" class="px-5 py-3">
            <p class="font-weight-bold">Lorem</p>
            <p class="text-reset">Jennifer Niven</p>
        </div>
        <div class="content">
            <p class="font-weight-bold">VUE JS</p>
        </div>
        <div class="content">
            <p class="font-weight-bold">VUE JS</p>
        </div>

    </div>
</div>

@endsection
