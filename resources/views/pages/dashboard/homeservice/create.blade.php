@extends('layouts.dashboard.template')

@section('content')
@include('layouts.dashboard.sidebar')
@include('layouts.dashboard.header')
@include('layouts.dashboard.scripts')


<main id="main" class="main">

  <div class="pagetitle">
    <h1>Tambah Form Data Homepege Service</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Data Homepage Service</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-8">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Form Data Homepage Service</h5>

            <!-- General Form Elements -->
            <form action="{{ route('homeservice.store') }}" method="POST">
              @csrf

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                  <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Subtitle</label>
                <div class="col-sm-10">
                  <input type="text" name="subtitle" value="{{ old('subtitle') }}" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                  <textarea name="description" class="form-control" rows="10">{{ old('description') }}</textarea>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Description 2</label>
                <div class="col-sm-10">
                  <textarea name="description2" class="form-control" rows="10">{{ old('description2') }}</textarea>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Description 3</label>
                <div class="col-sm-10">
                  <textarea name="description3" class="form-control" rows="10">{{ old('description3') }}</textarea>
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