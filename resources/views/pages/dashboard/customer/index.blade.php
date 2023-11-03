@extends('layouts.dashboard.template')


@section('content')
@include('layouts.dashboard.sidebar')
@include('layouts.dashboard.header')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Customer</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item">Customer</li>
        <li class="breadcrumb-item active">Customer</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Data Customer</h5>
            
            <a href="{{ route('customer.create') }}" class="btn btn-primary mb-3">Create</a>

            {{ $dataTable->table() }}

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->


@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush

@include('layouts.dashboard.scripts')
@endsection