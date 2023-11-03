    <!-- About Start -->
    <div class="container-fluid py-5">
      <div class="container py-5">
          <div class="row g-5">
              <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                  <div class="about-img">
                      <div class="rotate-left bg-dark"></div>
                      <div class="rotate-right bg-dark"></div>
                      <img src="{{ asset('/homepage/assets/background/background5.jpg') }}" class="img-fluid h-100" alt="img">
                  </div>
              </div>
              <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                  <div class="about-item overflow-hidden">
                      <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                          About PT DINAMIKA SUKMA MULIA</h5>
                      <h1 class="display-5 mb-2">{{ $home_about->title }}</h1>
                      <p class="fs-5" style="text-align: justify;">{{ $home_about->description }}</p>
                      <a href="{{ route('homepageabout') }}" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-5">About Us</a>

                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- About End -->