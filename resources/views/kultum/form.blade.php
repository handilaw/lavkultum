@extends('layouts.index')
@section('main')
@php
$ar_kategori = App\Kategori::all();
$ar_santri = App\Santri::all();
@endphp
<header class="masthead" style="background-image: url({{ asset('img/kultum.jpg') }})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Buat Kultum Baru</h1>
          </div>
        </div>
      </div>
    </div>
  </header>

<!-- Post Content -->
<center>
  <article>
    <div class="container">
      <!-- Page Header -->
      <form method="POST" action="{{route('kultum.store')}}" enctype="multipart/form-data">
        @csrf
        <fieldset>

          <!-- Form Name -->
          <legend>Form Kultum</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-8 control-label" for="judul">Judul</label>  
            <div class="col-md-8">
              <input id="judul" name="judul" type="text" placeholder="Judul Kultum" class="form-control input-md">
            </div>
          </div>

          <!-- Textarea -->
          <div class="form-group">
            <label class="col-md-8 control-label" for="isi">Isi</label>  
            <div class="col-md-8">
              <textarea id="isi" name="isi" cols="40" rows="10" class="form-control @error('isi') is-invalid @enderror">{{ old('isi') }}</textarea>
            </div>
          </div>

          <!-- Button Drop Down -->
          <div class="form-group">
            <label class="col-md-8 control-label" for="kategori">Kategori Kultum</label>
            <div class="col-md-8">
              <select name="kategori" class="custom-select @error('kategori') is-invalid @enderror">
                <option value="">-- Pilih Kategori Kultum --</option>
                @foreach($ar_kategori as $kat)
                <option value="{{ $kat['id'] }}" @if (old('kategori') == $kat['id']) selected @endif> {{ $kat['nama'] }} </option>
                @endforeach
              </select>
            </div>
          </div>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-8 control-label" for="santri">Nama Santri</label>
            <div class="col-md-8">
              <select name="santri" class="custom-select @error('kategori') is-invalid @enderror">
                @foreach($ar_santri as $san)
                <option value="{{ $san['id'] }}" @if (old('kategori') == $san['id']) selected @endif> {{ $san['nama'] }} </option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8">
              <button name="proses" type="submit" class="btn btn-primary" 
              value="simpan">Simpan</button>
            </div>
          </div>
        </fieldset>
      </form> 
    </div>
  </article>
</center>
@endsection
