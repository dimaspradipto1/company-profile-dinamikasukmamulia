@extends('layouts.dashboard.template')

@section('content')
@include('layouts.dashboard.sidebar')
@include('layouts.dashboard.header')
@include('layouts.dashboard.scripts')


<main id="main" class="main">

  <div class="pagetitle">
    <h1>Tambah Form Data About</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Data About</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-8">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Form Data About</h5>

            <!-- General Form Elements -->
            <form action="{{ route('about.store') }}" method="POST">
              @csrf

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Title Sejarah</label>
                <div class="col-sm-10">
                  <input type="text" name="judul_sejarah" value="{{ old('judul_sejarah') }}" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Sejarah Deskripsi</label>
                <div class="col-sm-10">
                  <textarea name="sejarah_description" class="form-control" rows="10">{{ old('sejarah_description') }}</textarea>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Title Filosofi</label>
                <div class="col-sm-10">
                  <input type="text" name="judul_filosofi" value="{{ old('judul_filosofi') }}" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Filosofi Deskripsi</label>
                <div class="col-sm-10">
                  <textarea name="filosofi_description" class="form-control" rows="10">{{ old('filosofi_description') }}</textarea>
                  
                </div>

              </div>

              <div class="row mb-3">
                
                <div class="col-sm-10 mt-3">
                  <button type="submit" class="btn btn-primary">SAVE</button>
                </div>
              </div>

            </form><!-- End General Form Elements -->

          </div>
        </div>

      </div>

    </div>
  </section>

</main><!-- End #main -->    
@endsection