<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PT DINAMIKA SUKMA MULIA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    @include('layouts.homepage.style')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    @include('layouts.homepage.navbar')

    @yield('content')

    @include('layouts.homepage.footer')

    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
                    <a href="#" class="text-primary mb-0 display-6">PT <span class="text-white">DINAMIKA SUKMA
                            MULIA</span></a>
                </div>
                <div class="col-md-4 copyright-btn text-center text-md-start mb-3 mb-md-0 flex-shrink-0">
                    <a class="btn btn-primary rounded-circle me-3 copyright-icon" href=""><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-primary rounded-circle me-3 copyright-icon" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-primary rounded-circle me-3 copyright-icon" href=""><i
                            class="fab fa-youtube"></i></a>
                    <a class="btn btn-primary rounded-circle me-3 copyright-icon" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                </div>


            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>


    @include('layouts.homepage.script')
</body>

</html>