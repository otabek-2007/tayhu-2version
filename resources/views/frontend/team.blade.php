@extends('layouts.frontend')
@section('content')
    <div class="single-page">
        <div class="container">
            <nav aria-label="breadcrumb single-page">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Team</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Team Section Start -->
    <div id="team" class="team section-padding">
        <div class="container aos-init aos-animate" data-aos="fade-up">

            <div class="section-title">
                <h2>Our Team</h2>
                <h5>Our team comprises seasoned and dedicated construction professionals who bring a wealth of expertise to every project</h5>
            </div>

            <div class="row gy-4">

                <div class="col-xl-3 col-md-6 col-sm-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="member flip">
                        <img src="assets/images/team/team-1.jpg" class="img-fluid" alt="">
                        <h4>Jhone Bi</h4>
                        <span>Application Manager</span>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-xl-3 col-md-6 col-sm-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="member flip">
                        <img src="assets/images/team/team-2.jpg" class="img-fluid" alt="">
                        <h4>Sani Awesome</h4>
                        <span>Social Media</span>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-xl-3 col-md-6 col-sm-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                    <div class="member flip">
                        <img src="assets/images/team/team-3.jpg" class="img-fluid" alt="">
                        <h4>Andrio Willi</h4>
                        <span>Content Writer</span>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-xl-3 col-md-6 col-sm-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                    <div class="member flip">
                        <img src="assets/images/team/team-4.jpg" class="img-fluid" alt="">
                        <h4>Afa Jonson</h4>
                        <span>Business Manager</span>
                    </div>
                </div><!-- End Team Member -->

            </div>

        </div>
    </div>
    <!-- Team Section End -->

@endsection
