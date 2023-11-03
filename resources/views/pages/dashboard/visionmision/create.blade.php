@extends('layouts.dashboard.template')

@section('content')
@include('layouts.dashboard.sidebar')
@include('layouts.dashboard.header')
@include('layouts.dashboard.scripts')

@push('scripts')
  <script>
    CKEDITOR.replace( 'vision' );
  </script>
@endpush

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Tambah Form Data Vision & Mision</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Data Vision & Mision</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-8">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Form Data Vision & Mision</h5>

            <!-- General Form Elements -->
            <form action="{{ route('visionmision.store') }}" method="POST">
              @csrf

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Vision</label>
                <div class="col-sm-10">
                  <textarea name="vision" rows="10" class="form-control">{{ old('vision') }}</textarea>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Mision</label>
                <div class="col-sm-10">
                  <input type="text" name="mision1" value="{{ old('mision1') }}" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                  <input type="text" name="mision2" value="{{ old('mision2') }}" class="form-control">
                </div>
              </div>
             
              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                  <input type="text" name="mision3" value="{{ old('mision3') }}" class="form-control">
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                  <input type="text" name="mision4" value="{{ old('mision4') }}" class="form-control">
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                  <input type="text" name="mision5" value="{{ old('mision5') }}" class="form-control">
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