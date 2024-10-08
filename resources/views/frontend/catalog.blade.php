@extends('layouts.frontend')
@section('content')
<div class="single-page">
    <div class="container">
        <nav aria-label="breadcrumb single-page">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><x-translation key="home_link" /></a></li>
                <li class="breadcrumb-item active" aria-current="page"><x-translation key="catalog_link" /></li>
            </ol>
        </nav>
    </div>
</div>

<!-- project area start -->
<div class="tp-project-4-area pt-120 pb-60">
    <div class="container">
        <div class="tp-project-4-wrap">
            <div class="row gx-50 align-items-center">
                <!-- {{$category_first}} -->
                <div class="col-xl-6 col-lg-6">
                    <div class="row">
                        <div class="col-xl-12 mb-50">
                            @foreach($category_second as $item)
                            <div class="tp-project-3-item p-relative">
                                <div class="tp-project-3-thumb mb-35">
                                    <img src="{{ asset('storage/' . str_replace('\\', '/', $item->image)) }}" alt="">
                                    <div class="tp-project-3-button">
                                        <a href="service/{{$item->id}}"><x-translation key="view_product" /></a>
                                    </div>
                                </div>
                                <div class="tp-project-3-content">
                                    <h4 class="tp-project-3-title text-white">
                                        <a class="text-anim-2" href="service/{{$item->id}}">{{$item->getTranslatedAttribute('name')}}</a>
                                    </h4>
                                    <span>Art , Direction</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="row">
                        <div class="col-xl-12 mb-50">
                            @foreach($category_first as $item)
                            <div class="tp-project-3-item p-relative">
                                <div class="tp-project-3-thumb mb-35">
                                    <img src="{{ asset('storage/' . str_replace('\\', '/', $item->image)) }}" alt="">
                                    <div class="tp-project-3-button">
                                        <a href="service/{{$item->id}}"><x-translation key="view_product" /></a>
                                    </div>
                                </div>
                                <div class="tp-project-3-content">
                                    <h4 class="tp-project-3-title text-white">
                                        <a class="text-anim-2" href="service/{{$item->id}}"> {{$item->getTranslatedAttribute('name')}}
                                        </a>
                                    </h4>
                                    <span>Art , Direction</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- category -->
                <!-- {{$category_second}} -->

            </div>
        </div>
    </div>
</div>
<!-- project area end -->
@endsection