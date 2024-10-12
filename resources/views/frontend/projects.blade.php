@extends('layouts.frontend')
@section('content')

<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{ asset('assets/img/new-images/tayhu-company-images/bg-4 1.png') }}');">
    <div class="shape-image float-bob-y">
    </div>
    <div class="container">
        <div class="breadcrumb-wrapper-items">
            <div class="page-heading">
                <div class="breadcrumb-sub-title">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s"> <x-translation key="Gallery" /></h1>
                </div>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="{{ url('/') }}">
                            <x-translation key="home_link" />
                        </a>
                    </li>
                    <li>
                        <i class="fa-sharp fa-solid fa-slash-forward"></i>
                    </li>
                    <li>
                        <x-translation key="Gallery" />
                    </li>
                </ul>
            </div>
            <div class="breadcrumb-image">
                <div class="bar-shape">
                </div>
            </div>
        </div>
    </div>
</div>

<section class="project-section fix section-padding">
    <div class="container">
        <div class="section-title text-center">
            <h6 class="wow fadeInUp">
                <i class="fa-solid fa-arrow-left-long"></i>
                <x-translation key="Explore_Our_Latest_Creations" />
                <i class="fa-solid fa-arrow-right-long"></i>
            </h6>
            <h2 class="splt-txt wow" data-splitting>
                <x-translation key="Our_Gallery" />
            </h2>
        </div>
    </div>
    <div class="project-wrapper style-2">
        <div class="main-box">
            @foreach($projects as $item)
            @php
            // Correct the path by replacing any misplaced slashes or missing them in the filename part
            $imagePath = $item->image
            ? Storage::url(str_replace('\\', '/', $item->image)) // Replaces backslashes with forward slashes
            : asset('assets/img/default-placeholder.png');
            @endphp

            <div class="box wow fadeInUp" data-wow-delay="{{ ($loop->index + 1) * 0.2 }}s"
                style="background-image: url('{{ $imagePath }}'); background-size: cover; background-position: center;">
            </div>

            @endforeach
        </div>
    </div>
</section>

<style>
    .project-wrapper.style-2 .main-box .box {
        width: 25%;
        height: 310px;
    }
</style>

@endsection