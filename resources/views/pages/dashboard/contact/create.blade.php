@extends('layouts.dashboard.template')

@section('content')
@include('layouts.dashboard.sidebar')
@include('layouts.dashboard.header')
@include('layouts.dashboard.scripts')


<main id="main" class="main">

  <div class="pagetitle">
    <h1>Tambah Form Data Contact</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Data Contact</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-8">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Form Data Contact</h5>

            <!-- General Form Elements -->
            <form action="{{ route('contact.store') }}" method="POST">
              @csrf

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                  <textarea name="address" class="form-control" cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm-10">
                  <input type="number" name="phone" value="{{ old('phone') }}" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" name="email" value="{{ old('email') }}" class="form-control">
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