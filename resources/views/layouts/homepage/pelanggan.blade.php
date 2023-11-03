<!-- pelanggan Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
            <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Client
            </h5>
            <h1 class="display-5 w-50 mx-auto">Pelanggan Kami</h1>
        </div>
        <div class="row g-5">
            @foreach ($customers as $customer)
            <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                <div class="rounded team-item">
                    <img src="{{ Storage::url($customer->url) }}" style="height: 100;"
                        class="img-fluid w-100 rounded-top border border-bottom-0" alt="">
                    <div class="team-content bg-primary text-dark text-center py-3">
                        <span class="fs-4 fw-bold">{{ $customer->customer }}</span>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- pelanggan End -->