<!-- Navbar Start -->
<div class="container-fluid bg-dark">
  <div class="container">
      <nav class="navbar navbar-dark navbar-expand-lg py-lg-0">
          <a href="{{ route('homepage') }}" class="navbar-brand">
              <img src="{{ asset('/homepage/assets/logo.png') }}" style="width: 50px;" alt="logo">
            </a>
            <h5 class="text-primary mb-0 display-8">PT <span class="text-white">DINAMIKA SUKMA MULIA</span></h5>
          <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarCollapse">
              <span class="fa fa-bars text-dark"></span>
          </button>
          <div class="collapse navbar-collapse me-n3" id="navbarCollapse">
              <div class="navbar-nav ms-auto">
                  <a href="{{ route('homepage') }}" class="nav-item nav-link active">Home</a>
                  <a href="{{ route('homepageabout') }}" class="nav-item nav-link">About</a>
                  <a href="{{ route('homepageservices') }}" class="nav-item nav-link">Services</a>
                  <a href="{{ route('homepagegallery') }}" class="nav-item nav-link">Gallery</a>
                  <a href="{{ route('homepagecontact') }}" class="nav-item nav-link">Contact</a>
                  <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
              </div>
          </div>
      </nav>
  </div>
</div>
<!-- Navbar End -->
