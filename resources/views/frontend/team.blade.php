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
            <h2><x-translation key="our_team_link" /></h2>
            <h5><x-translation key="our_team_text" /></h5>
        </div>

        <div class="row gy-4">
            @foreach($teams as $item)
            <div class="col-xl-3 col-md-6 col-sm-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="member flip">
                    <img src="{{ asset('storage/' . str_replace('\\', '/', $item->image_url)) }}" class="img-fluid" alt="">
                    <h4>{{$item->getTranslatedAttribute('name')}}
                    </h4>
                    <span>{{$item->getTranslatedAttribute('position')}}</span>
                </div>
            </div><!-- End Team Member -->

            @endforeach
        </div>

    </div>
</div>
<!-- Team Section End -->

@endsection