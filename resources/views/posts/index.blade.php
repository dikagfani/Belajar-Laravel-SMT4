@extends('layouts.app')

@section('title', 'Fanbase Garuda')
@section('content')
    <div class="py-2 container">
        <h2 class="my-3 border-bottom">{{ $title }}</h2>
        @foreach ($posts as $post)
            <div class="card col-sm-3" style="width: 18rem;">
                <img src="{{ $post['thumbnail'] }}" class="card-img-top" alt="{{ $post['slug'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $post['judul'] }}</h5>
                    <p class="card-text">{{ substr($post['isi'], 0, 200) }}...</p>
                    <a href="{{ route('post.detail', $post->id) }}" class="btn btn-warning">Selengkapnya</a>
                </div>
            </div>
        @endforeach
    </div class="py-2 container">

@endsection