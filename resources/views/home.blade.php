@extends('layouts.app')

@section('title', 'Fanbase Garuda')

@section('content')
  <div class="py-2 container">
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://kitagaruda.id/_next/image?url=https%3A%2F%2Fkitagaruda.sgp1.cdn.digitaloceanspaces.com%2F01K35RHBRWRFEW9E1N25CJD241.jpg&w=2048&q=75" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://assets.goal.com/images/v3/bltbcac3006e5b4a735/Rizky%20Ridho%20Ole%20Romeny.jpg?auto=webp&format=pjpg&width=3840&quality=60" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://assets.goal.com/images/v3/blt5894a97cdf851e9d/Timnas%20Indonesia.jpg?auto=webp&format=pjpg&width=3840&quality=60" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="p-5 mb-4 bg-body-tertiary rounded-3">
        <div class="container-fluid py-5">
          <h1 class="display-5 fw-bold"> {{ $data['name']. ' | '. $data['email'] }}</h1>
          <p class="col-md-8 fs-4">Selamat Datang di Markas Fans Timnas Indonesia.</p>
          <a class="btn btn-danger btn-lg" href="/posts">
            Lihat Berita Selengkapnya...
          </a>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Jadwal Pertandingan</h5>
              <p class="card-text">Indonesia VS Bulgaria</p>
              <a href="#" class="btn btn-warning">Lihat Jadwal</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Profil Skuad</h5>
              <p class="card-text">Welcome: "Coach John Herdman!"</p>
              <a href="#" class="btn btn-warning">Lihat Skuad</a>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection