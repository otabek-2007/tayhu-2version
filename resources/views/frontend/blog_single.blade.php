@extends('layouts.frontend')
@section('content')
<div class="single-page">
    <div class="container">
        <nav aria-label="breadcrumb single-page">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}"><x-translation key="home_link" /></a></li>
                <li class="breadcrumb-item"><a href="{{route('blog')}}"><x-translation key="blog_link" /></a></li>
                <li class="breadcrumb-item active" aria-current="page"><x-translation key="single_blog_link" /></li>
            </ol>
        </nav>
    </div>
</div>

<!-- Page Section Start -->
<div id="page" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title text-left">
                    <h2>{{$blog->getTranslatedAttribute('title')}}</h2>
                    <h5><x-translation key="your_guide" /></h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="0.2s">
                <img src="{{ asset('storage/' . str_replace('\\', '/', $blog->image_url)) }}" alt="image" class="mb-30">
                <p> {!! $blog->getTranslatedAttribute('content', app()->getLocale()) !!}</p>
            </div>
        </div>
    </div>
</div>
<!-- Page End -->

@endsection