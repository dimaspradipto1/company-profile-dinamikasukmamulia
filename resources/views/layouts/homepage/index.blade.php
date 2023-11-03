@extends('layouts.homepage.template')

@section('content')
@include('layouts.homepage.carousel')

<!-- Get In Touch Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay=".3s">
    <div class="container py-5">
        <div class="bg-light px-4 py-5 rounded">
            <div class="row">
                @foreach ($features as $feature )
                <div class="col-sm-6 mb-3 py-2 mb-sm-0 ">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $feature->title ?? "None" }}</h5>
                            <p class="card-text">{{ $feature->description ?? "None" }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Get In Touch End -->


@include('layouts.homepage.about')

@include('layouts.homepage.service')


@include('layouts.homepage.project')

@include('layouts.homepage.mitra')

@include('layouts.homepage.pelanggan')
@endsection