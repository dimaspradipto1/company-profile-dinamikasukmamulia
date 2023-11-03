@extends('layouts.homepage.template')

@section('content')
        <!-- breadcrumb Header Start -->
        <div class="container-fluid page-header py-5">
            <div class="container text-center py-5">
                <h1 class="display-2 text-white mb-4 animated slideInDown">Gallery</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white" aria-current="page">Gallery</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- breadcrumb Header End -->


        <!-- Gallery Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                    <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Gallery</h5>
                </div>
                <div class="owl-carousel blog-carousel fadeInUp" data-wow-delay=".5s">
                    @foreach ($galleries as $gallery)
                    <div class="blog-item">
                        <img src="{{Storage::url($gallery->url) }}" class="img-fluid w-100 rounded-top" alt="">
                         <div class="rounded-bottom bg-light">
                            <div class="d-flex justify-content-between p-4 pb-2">
                                <span class="pe-2 text-dark"><i class="fa fa-user me-2"></i>By Admin</span>
                                <span class="text-dark"><i class="fas fa-calendar-alt me-2"></i>{{ $gallery->created_at->format('d-m-Y') }}</span>
                            </div>
                            <div class="px-4 pb-0">
                                <h4>{{ $gallery->title }}l</h4>
                                
                            </div>
                            <div class="p-4 py-2 d-flex justify-content-between bg-primary rounded-bottom blog-btn">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Gallery End -->
@endsection