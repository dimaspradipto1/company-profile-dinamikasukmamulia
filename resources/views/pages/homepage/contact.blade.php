@extends('layouts.homepage.template')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Contact</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</div>
<!-- breadcrumb Header End -->

<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
            <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Get In Touch
            </h5>
            <h1 class="display-5 w-50 mx-auto">Contact for Us</h1>
        </div>
        <div class="row g-5 mb-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="h-100">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3989.011075748052!2d104.00080977496539!3d1.1525796988363868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMcKwMDknMDkuMyJOIDEwNMKwMDAnMTIuMiJF!5e0!3m2!1sid!2sid!4v1696867955044!5m2!1sid!2sid"
                        class="border-0 rounded w-100 h-100" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                <p class="mb-4">Send Your Message</p>

                <div class="rounded contact-form">
                    <form action="/chatwhatsapp" method="POST">
                        @csrf
                        <div class="mb-4">
                            <input type="text" name="name" class="form-control p-3" placeholder="Your Name">
                        </div>
                        <div class="mb-4">
                            <input type="email" name="email" class="form-control p-3" placeholder="Your Email">
                        </div>
                        <div class="mb-4">
                            <input type="number" name="phone" class="form-control p-3" placeholder="yourphone/whatsapp">
                        </div>
                        <div class="mb-4">
                            <input type="text" name="company" class="form-control p-3" placeholder="Company">
                        </div>
                        <div class="mb-4">
                            <textarea class="w-100 form-control p-3" name="message" rows="6" cols="10"
                                placeholder="Message"></textarea>
                        </div>
                        <button class="btn btn-primary border-0 py-3 px-4 rounded-pill" type="submit" style="width: 200px">Send Message</button>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSddLD85MKFYoMgfgXBGL-H45SkjTfrFyOQxHdrwBilz03w3hA/viewform?usp=sharing" class="btn btn-primary border-0 py-3 px-4 rounded-pill" type="submit" style="width: 200px"> Reviews</a>
                    </form>
                </div>

            </div>

        </div>
        <div class="row g-4 wow fadeInUp" data-wow-delay=".3s">

            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="d-flex bg-light p-3 rounded contact-btn-link">
                    <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle p-3 ms-3"
                        style="width: 64px; height: 64px;">
                        <i class="fas fa-map-marker-alt text-dark"></i>
                    </div>
                    <div class="ms-3 contact-link">
                        <h4 class="text-dark">Address</h4>
                        <a href="#">
                            <h5 class="text-dark d-inline fs-6">
                                {{ $contact->address ?? 'None' }}
                            </h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="d-flex bg-light p-3 rounded contact-btn-link">
                    <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle p-3 ms-3"
                        style="width: 64px; height: 64px;">
                        <i class="fa fa-phone text-dark"></i>
                    </div>
                    <div class="ms-3 contact-link">
                        <h4 class="text-dark">Call Us</h4>
                        <a class="h5 text-dark fs-6" href="tel:+0123456789">{{ $contact->phone ?? 'None' }}</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="d-flex bg-light p-3 rounded contact-btn-link">
                    <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle p-3 ms-3"
                        style="width: 64px; height: 64px;">
                        <i class="fa fa-envelope text-dark"></i>
                    </div>
                    <div class="ms-3 contact-link">
                        <h4 class="text-dark">Email Us</h4>
                        <a class="h5 text-dark fs-6" href="#">{{ $contact->email ?? 'None' }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection