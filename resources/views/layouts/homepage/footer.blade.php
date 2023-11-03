<!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay=".3s">
    <div class="container py-5">
        <div class="row g-4 footer-inner">
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="text-white fw-bold mb-4">About Us.</h4>
                    <p>PT DINAMIKA SUKMA MULIA merupakan salah satu perusahaan yang bergerak di bidang pelayanan
                        jasa kepengurusan dokumen ekspor dan impor</p>
                    <p class="mb-0"><a class="" href="#">PT DINAMIKA SUKMA MULIA </a> &copy; 2023 All Right Reserved.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="text-white fw-bold mb-4">Usefull Link</h4>
                    <div class="d-flex flex-column align-items-start">
                        <a class="btn btn-link ps-0" href=""><i class="fa fa-check me-2"></i>About Us</a>
                        <a class="btn btn-link ps-0" href=""><i class="fa fa-check me-2"></i>Contact Us</a>
                        <a class="btn btn-link ps-0" href=""><i class="fa fa-check me-2"></i>Our Services</a>
                        <a class="btn btn-link ps-0" href=""><i class="fa fa-check me-2"></i>Terms & Condition</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="text-white fw-bold mb-4">Contact Us</h4>
                    <a href="" class="btn btn-link w-100 text-start ps-0 pb-3 border-bottom rounded-0"><i class="fa fa-map-marker-alt me-3"></i>{{ $contact->address ?? 'None' }}
                    </a>
                    <a href="" class="btn btn-link w-100 text-start ps-0 py-3 border-bottom rounded-0"><i
                            class="fa fa-phone-alt me-3"></i>{{ $contact->phone ?? 'None' }}</a>
                    <a href="" class="btn btn-link w-100 text-start ps-0 py-3 border-bottom rounded-0"><i
                            class="fa fa-envelope me-3"></i>{{ $contact->email ?? 'None' }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->