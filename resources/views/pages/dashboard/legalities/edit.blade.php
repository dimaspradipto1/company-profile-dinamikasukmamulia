@extends('layouts.dashboard.template')

@section('content')
@include('layouts.dashboard.sidebar')
@include('layouts.dashboard.header')
@include('layouts.dashboard.scripts')


<main id="main" class="main">

  <div class="pagetitle">
    <h1>Edit Form Data Legalitas</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Data Legalitas</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-8">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Form Data Legalitas</h5>

            <!-- General Form Elements -->
            <form action="{{ route('legality.update', $legality->id) }}" method="POST">
              @csrf
              @method('PUT')

              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                <div class="col-sm-10">
                 <input type="text" name="perusahaan" value="{{ old('nama_perusahaan') ?? $legality->perusahaan }}" class="form-control">
                </div>
              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Pimpinan</label>
                <div class="col-sm-10">
                 <input type="text" name="pimpinan" value="{{ old('pimpinan') ?? $legality->pimpinan }}" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Nama Notaris</label>
                <div class="col-sm-10">
                 <input type="text" name="notaris" value="{{ old('notaris') ?? $legality->notaris }}" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Akte Notaris</label>
                <div class="col-sm-10">
                  <input type="text" name="akte_notaris" value="{{ old('akte_notaris') ?? $legality->akte_notaris }}" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Ahu Nomor</label>
                <div class="col-sm-10">
                  <input type="text" name="ahu_nomor" value="{{ old('ahu_nomor') ?? $legality->ahu_nomor }}" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">SKEP PPJK</label>
                <div class="col-sm-10">
                  <input type="text" name="skep_ppjk" value="{{ old('skep_ppjk') ?? $legality->skep_ppjk }}" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                  <textarea name="alamat" rows="10" class="form-control">{{ old('alamat') ??$legality->alamat }}</textarea>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Kontak</label>
                <div class="col-sm-10">
                  <input type="text" name="kontak" value="{{ old('kontak') ?? $legality->kontak }}" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" name="email" value="{{ old('email') ?? $legality->email}}" class="form-control">
                </div>
              </div>

              <div class="row mb-3">
                
                <div class="col-sm-10 mt-3">
                  <button type="submit" class="btn btn-primary">UPDATE</button>
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