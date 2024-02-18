@extends('layouts.app')

@section('title', 'Katalog')
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/home-user.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/katalog-user.css')}}">
@endsection

@section('content')

@include('includes.topbar')

<div class="container books-list">
    <div class="d-flex mb-4 gap-2">
        <div class="d-flex flex-column section-left">
            <h3 class="font-weight-bold text-reset">Filter</h3>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Filter Berdasarkan</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="" selected disabled>Pilih</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Cari</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Cari...">
            </div>
            <button type="button" class="btn btn-primary btn-cari">Cari</button>
        </div>
        <div class="contents d-flex gap section-right">
            @foreach($books as $b)
            <div class="content">
                <p class="font-weight-bold">{{$b->title}}</p>
                <img src="{{asset('storage/' . $b->cover)}}" alt="vue.js" class="px-5 py-3">
                <p class="font-weight-bold">{{$b->author}}</p>
                <p class="text-reset">{{$b->year}}</p>
            </div>
            @endforeach
        </div>
    </div>


</div>

@endsection
