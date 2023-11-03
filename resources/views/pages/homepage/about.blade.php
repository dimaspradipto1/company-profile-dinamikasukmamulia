@extends('layouts.homepage.template')

@section('content')
        <!-- breadcrumb Header Start -->
        <div class="container-fluid page-header py-5">
          <div class="container text-center py-5">
              <h1 class="display-2 text-white mb-4 animated slideInDown">About</h1>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Pages</a></li>
                      <li class="breadcrumb-item text-white" aria-current="page">About</li>
                  </ol>
              </nav>
          </div>
      </div>
      <!-- breadcrumb Header End -->
  
  
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
                          <h1 class="display-5 mb-2">{{ $about->judul_sejarah ?? 'None' }}</h1>
                          <p class="fs-5" style="text-align: justify;">{{ $about->sejarah_description ?? 'None' }}</p><br>
  
                          <h1 class="display-5 mb-2">{{ $about->judul_filosofi ?? 'None' }}</h1>
                          <p class="fs-5" style="text-align: justify;">{{ $about->filosofi_description ?? 'None' }}</p>
  
                          <a href="" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-5">About Us</a>
  
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- About End -->

  
      <!-- LEGALITAS PERUSAHAAN Start -->
      <div class="container-fluid py-5 call-to-action wow fadeInUp" data-wow-delay=".3s" style="margin: 6rem 0;">
          <div class="container py-md-3">
              <div class="row g-6">
                  
                  <h1 class="pb-4 text-white text-center">LEGALITAS PERUSAHAAN</h1>
                  <div class="row pt-3 mt-2 justify-content-center">
                      <div class="col-lg-8">
                          <div class="row text-white">
                              <div class="col-3">Perusahaan</div>
                              <div class="col-1">&nbsp;:</div>
                              <div class="col-8">{{ $legality->perusahaan ?? 'None' }}</div>
                          </div>
                          <div class="row text-white mt-3">
                              <div class="col-3">Pimpinan</div>
                              <div class="col-1">&nbsp;:</div>
                              <div class="col-8">{{ $legality->pimpinan ?? 'None' }}</div>
                          </div>
                          <div class="row text-white mt-3">
                              <div class="col-3">nama Notaris</div>
                              <div class="col-1">&nbsp;:</div>
                              <div class="col-8">{{ $legality->notaris ?? 'None' }}</div>
                          </div>
                          <div class="row text-white mt-3">
                              <div class="col-3">Akte Notaris</div>
                              <div class="col-1">&nbsp;:</div>
                              <div class="col-8">{{ $legality->akte_notaris ?? 'None' }}</div>
                          </div>
                          <div class="row text-white mt-3">
                              <div class="col-3">AHU Nomor</div>
                              <div class="col-1">&nbsp;:</div>
                              <div class="col-8">{{ $legality->ahu_nomor ?? 'None' }}</div>
                          </div>
                          <div class="row text-white mt-3">
                              <div class="col-3">SKEP PPJK</div>
                              <div class="col-1">&nbsp;:</div>
                              <div class="col-8">{{ $legality->skep_ppjk ?? 'None' }}</div>
                          </div>
                          <div class="row text-white mt-3">
                              <div class="col-3">Alamat</div>
                              <div class="col-1">&nbsp;:</div>
                              <div class="col-8">{{ $legality->alamat ?? 'None' }}</div>
                          </div>
                          <div class="row text-white mt-3">
                              <div class="col-3">Kontak</div>
                              <div class="col-1">&nbsp;:</div>
                              <div class="col-8">{{ $legality->kontak ?? 'None' }}</div>
                          </div>
                          <div class="row text-white mt-3">
                              <div class="col-3">Email</div>
                              <div class="col-1">&nbsp;:</div>
                              <div class="col-8">{{ $legality->email ?? 'None' }}</div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
      <!-- Call To Action End -->
  
        <!-- Services Start -->
        <div class="container-fluid services py-5">
          <div class="container py-5">
              <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                  <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">VISI & MISI</h5>
                  <h1 class="display-5">VISI PERUSAHAAN</h1>
                  <p>{{ $vision_mision->vision ?? 'None'}}</p>
              </div>
              <div class="mb-5 wow fadeInUp" data-wow-delay=".6s">
                  <h1 class="display-5 text-center">MISI PERUSAHAAN</h1>
                  <ol type="1" class="text-start">
                      <li>{{ $vision_mision->mision1 ?? 'None' }}</li>
                      <li>{{ $vision_mision->mision2 ?? 'None' }}</li>
                      <li>{{ $vision_mision->mision3 ?? 'None' }}</li>
                      <li>{{ $vision_mision->mision4 ?? 'None' }}</li>
                      <li>{{ $vision_mision->mision5 ?? 'None' }}</li>
                  </ol>
              </div>
             
          </div>
      </div>
      <!-- Services End -->
@endsection