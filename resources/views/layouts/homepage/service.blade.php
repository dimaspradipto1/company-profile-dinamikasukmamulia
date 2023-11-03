<!-- Services Start -->
<div class="container-fluid services py-5">
    <div class="container text-center py-5">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
            <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our
                Services</h5>
            <h1 class="display-5">{{ $homeservice->title }}</h1>
            <p>{{ $homeservice->subtitle }}</p>
        </div>
        <div class="row g-5">
            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                <div class="bg-light rounded p-5 services-item">
                    <div class="d-flex" style="align-items: center; justify-content: center;">
                        <div class="mb-4 rounded-circle services-inner-icon">
                            <i class="fa fa-globe fa-3x text-primary"></i>
                        </div>
                    </div>
                    <p class="fs-5">{{ $homeservice->description }}</p>
                </div>
            </div>


            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".5s">
                <div class="bg-light rounded p-5 services-item">
                    <div class="d-flex" style="align-items: center; justify-content: center;">
                        <div class="mb-4 rounded-circle services-inner-icon">
                            <i class="fa fa-handshake fa-3x text-primary"></i>
                        </div>
                    </div>
                    <p class="text-center fs-5">{{ $homeservice->description2 }}</p>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".7s">
                <div class="bg-light rounded p-5 services-item">
                    <div class="d-flex" style="align-items: center; justify-content: center;">
                        <div class="mb-4 rounded-circle services-inner-icon">
                            <i class="fa fa-hand-holding fa-3x text-primary"></i>
                        </div>
                    </div>
                    <p class="text-center fs-5">{{ $homeservice->description3 }}</p>

                </div>
            </div>
        </div>

            <a href="{{ route('homepageservices') }}"
                class="btn btn-primary text-white border-0 rounded-pill px-4 py-3 mt-4 wow fadeInUp"
                data-wow-delay=".3s">More Services</a>
        </div>
    </div>
    <!-- Services End -->