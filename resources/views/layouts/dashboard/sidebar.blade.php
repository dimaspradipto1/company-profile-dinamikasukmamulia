 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="index.html">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Homepage</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ route('hero.index') }}">
            <i class="bi bi-circle"></i><span>Hero</span>
          </a>
        </li>
        <li>
          <a href="{{ route('feature.index') }}">
            <i class="bi bi-circle"></i><span>Feature</span>
          </a>
        </li>
        <li>
          <a href="{{ route('homeabout.index') }}">
            <i class="bi bi-circle"></i><span>About</span>
          </a>
        </li>
        <li>
          <a href="{{ route('homeservice.index') }}">
            <i class="bi bi-circle"></i><span>Our Service</span>
          </a>
        </li>
        <li>
          <a href="{{ route('mitra.index') }}">
            <i class="bi bi-circle"></i><span>Mitra</span>
          </a>
        </li>
        <li>
          <a href="{{ route('customer.index') }}">
            <i class="bi bi-circle"></i><span>Pelanggan</span>
          </a>
        </li>
      </ul>
    </li><!-- End Components Nav -->

    <li class="nav-heading">Pages</li>


    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>About</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ route('about.index') }}">
            <i class="bi bi-circle"></i><span>About</span>
          </a>
        </li>
        {{-- <li>
          <a href="{{ route('aboutgallery.index') }}">
            <i class="bi bi-circle"></i><span>About Image</span>
          </a>
        </li> --}}
        <li>
          <a href="{{ route('legality.index') }}">
            <i class="bi bi-circle"></i><span>Legalitas</span>
          </a>
        </li>
        <li>
          <a href="{{ route('visionmision.index') }}">
            <i class="bi bi-circle"></i><span>Visi dan Misi</span>
          </a>
        </li>
      </ul>
    </li><!-- End Forms Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Services</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ route('services.index') }}">
            <i class="bi bi-circle"></i><span>Fiture Service</span>
          </a>
        </li>
        <li>
          <a href="{{ route('advantageservice.index') }}">
            <i class="bi bi-circle"></i><span>Advantage</span>
          </a>
        </li>
        <li>
          <a href="{{ route('weservices.index') }}">
            <i class="bi bi-circle"></i><span>Our Service</span>
          </a>
        </li>
      </ul>
    </li><!-- End Tables Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-card-image"></i></i><span>Gallery</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ route('gallery.index') }}">
            <i class="bi bi-circle"></i><span>Our Gallery</span>
          </a>
        </li>
       
      </ul>
    </li><!-- End Charts Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person-rolodex"></i></i><span>Contact</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ route('contact.index') }}">
            <i class="bi bi-circle"></i><span>Our Contact</span>
          </a>
        </li>
      </ul>
    </li><!-- End Icons Nav -->

  </ul>

</aside><!-- End Sidebar-->