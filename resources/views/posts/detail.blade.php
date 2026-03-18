@extends('layouts.app')

@section('title', $posts->judul)
@section('content')
    <div class="card">
      <h3 class="card-title fw-bold">{{ $posts->judul }}</h3>
      <img src="{{ $posts->thumbnail }}" class="card-img-top" alt="">
      <div class="card-body">
        <h5>{{ $posts->isi }}</h5>
        <a href="/posts" class="btn btn-warning">Kembali</a>
      </div>
    </div>

@endsection