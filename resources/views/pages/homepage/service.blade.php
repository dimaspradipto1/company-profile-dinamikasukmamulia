@extends('layouts.homepage.template')

@section('content')
    <!-- breadcrumb Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb Header End -->


    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Services</h5>
            </div>
            <div class="row g-5">

                @foreach ($services as $service)
                <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-item">
                        <div class="project-left bg-dark"></div>
                        <div class="project-right bg-dark"></div>
                            <img src="{{ Storage::url($service->url) }}" class="img-fluid h-100" alt="img">
                        <a href="" class="fs-4 fw-bold text-center">{{ $service->title ?? 'None' }}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- LEGALITAS PERUSAHAAN Start -->
    <div class="container-fluid py-5 call-to-action wow fadeInUp" data-wow-delay=".3s" style="margin: 6rem 0;">
        <div class="container py-md-3">
            <div class="row g-4">
                
                <h1 class="pb-4 text-white text-center">LAYANAN PERUSAHAAN KAMI</h1>
                <div class="row pt-3 mt-2 justify-content-center">
                    <div class="col-lg-8">
                        @foreach ($advantages as $advantage)
                        <div class="row text-white mt-2">
                            <div class="col-4">{{ $advantage->title ?? 'None' }}</div>
                            <div class="col-1">&nbsp;:</div>
                            <div class="col-7">{{ $advantage->description ?? 'None' }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Call To Action End -->

        <!-- Service Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                    <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Service</h5>
                    <h1 class="display-5">KENAPA MEMILIH KAMI</h1>
                </div>
                <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay=".5s">
                    @foreach ($our_services as $our_service)
                    <div class="blog-item">
                         <div class="rounded-bottom bg-light">
                            <div class="px-4 pb-0 py-3 mt-3">
                                <h4 class="mt-2">{{ $our_service->title }}</h4>
                                <p>{{ $our_service->description }}</p>
                            </div>
                            <div class="p-4 py-2 d-flex justify-content-between bg-primary rounded-bottom blog-btn">
                                <a href="#" type="button" class="btn btn-primary border-0">Learn More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Service End -->
@endsection