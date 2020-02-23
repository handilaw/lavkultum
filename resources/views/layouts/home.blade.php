@extends('layouts.index')
@section('main')

<!-- Page Header -->
  <header class="masthead" style="background-image: url({{ asset('img/home.png') }}); background-size: fill;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Kultum Santri</h1>
            <span class="subheading">Web yang berisi kumpulan kultum santri</span>
          </div>
        </div>
      </div>
    </div>
  </header>


  <!-- Main Content -->

  <section class="page-section mb-0" id="about">
    <div class="container">

      <!-- About Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase">Kultum Terbaru</h2>

      <!-- About Section Content -->
      <div class="row grid-divider">
        @foreach($ar_kultum as $kultum)
        <div class="col-sm-6 ml-auto text-justify post-preview">
          <a href="{{ route('kultum.show', $kultum->judul) }}">
            <h5 class="post-title">
              {{ $kultum->judul }}
            </h5>
            <h6 class="post-subtitle">
              {{ substr($kultum->isi, 0, 100) }}...
              <small>Selengkapnya</small>
            </h6>
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <hr>

@endsection

  