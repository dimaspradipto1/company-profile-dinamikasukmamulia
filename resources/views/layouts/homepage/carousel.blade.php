<!-- Carousel Start -->
<div class="container-fluid carousel px-0 mb-5 pb-5">
  <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide">
      </li>
      <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      @foreach ($heroes as $hero )
        
      <div class="carousel-item @if($loop->first) active @endif">
        <img src="{{ Storage::url($hero->url) }}" class="img-fluid w-100" alt="First slide">
        <div class="carousel-caption">
          <div class="container carousel-content">

            <h4 class="text-white mb-4 animated slideInDown">{{ $hero->title  }}
            </h4>
            <p class="text-white">{{ $hero->description }}</p>
              <a href="" class="me-2"><button type="button"
                class=" btn btn-primary border-2 rounded-pill animated slideInDown">Read
                More</button></a>
          </div>
        </div>
      </div>

      @endforeach
    </div>

    <button class="carousel-control-prev btn btn-primary border border-2 border-start-0 border-primary" type="button"
      data-bs-target="#carouselId" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next btn btn-primary border border-2 border-end-0 border-primary" type="button"
      data-bs-target="#carouselId" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<!-- Carousel End -->