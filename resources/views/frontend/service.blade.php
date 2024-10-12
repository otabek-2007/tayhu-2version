@extends('layouts.frontend')
@section('content')

<div id="smooth-wrapper">
    <div id="smooth-content">
        <!-- Breadcrumb Section Start -->
        <div class="breadcrumb-wrapper bg-cover"
            style="background-image: url('assets/img/service/product-cover.JPG')">
            <div class="shape-image float-bob-y">
                <!-- <img src="assets/img/vector.png" alt="img"> -->
            </div>
            <div class="container">
                <div class="breadcrumb-wrapper-items">
                    <div class="page-heading">
                        <div class="breadcrumb-sub-title">
                            <h1 class="wow fadeInUp" data-wow-delay=".3s">Products</h1>
                        </div>
                        <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                            <li>
                                <a href="index.html">
                                    Home
                                </a>
                            </li>
                            <li>
                                <i class="fa-sharp fa-solid fa-slash-forward"></i>
                            </li>
                            <li>
                                Products
                            </li>
                        </ul>
                    </div>
                    <div class="breadcrumb-image">
                        <!-- <img src="assets/img/breadcrumb-image.png" alt="img" class="float-bob-x"> -->
                        <div class="bar-shape">
                            <!-- <img src="assets/img/breadcrumb-bar.png" alt="img"> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service Section Start -->
        <section class="service-section fix section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <h6 class="wow fadeInUp"><i class="fa-solid fa-arrow-left-long"></i>OUR PRODUCTS<i
                            class="fa-solid fa-arrow-right-long"></i></h6>
                    <h2 class="splt-txt wow" data-splitting>Quality Frames and Panels <br> For Every Project</h2>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            @forelse($products as $product)
                            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                <div class="service-box-items items-bg">
                                    <div class="service-thumb">
                                        @php
                                        $images=json_decode($product->images);
                                        @endphp
                                        @if($images)
                                        <img src="{{ asset('storage/' . $images[0]) }}" alt="Product Image">
                                        @else
                                        <p>Image not uploaded</p>
                                        @endif
                                    </div>
                                    <div class="service-content">
                                        <h2 class="number">{{$loop->index < 10 ? "0" . $loop->index + 1 : $loop->index + 1}} </h2>

                                        <h4 class="tp-product-title">
                                            <a href="{{ route('serviceSingle', $product->id) }}" class="text-anim">
                                                {!! $product->getTranslatedAttribute('name', app()->getLocale()) !!}
                                            </a>
                                        </h4>
                                        <a href="{{ route('serviceSingle', $product->id) }}" class="link-btn">See Product <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <p>No products found.</p>
                            @endforelse
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="main-sidebar">
                            <div class="single-sidebar-widget">
                                <div class="search-widget">
                                    <form action="#">
                                        <input name="query" type="text" placeholder="Search">
                                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3><x-translation key="category" /></h3>
                                </div>
                                <div class="news-widget-categories">
                                    <ul>
                                        @foreach($categories as $item)
                                        <li><a href="/service/{{$item->id}}">{{$item->name}}</a> <span><i
                                                    class="fa-solid fa-arrow-right-long"></i></span></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3><x-translation key="download_link" /></h3>
                                </div>
                                @foreach($pdfs as $pdf)
                                <div class="brochures-download-items">
                                    <div class="brochures-items">
                                        <div class="icon">
                                            <i class="far fa-file-pdf"></i>
                                        </div>
                                        <div class="content">
                                            <h5>{{ $pdf->getTranslatedAttribute('title', app()->getLocale()) }}</h5>
                                            <p><x-translation key="download_link" /></p>
                                        </div>
                                    </div>
                                    <!-- Download button -->
                                    <a href="{{ asset('storage/' . $pdf->pdf) }}" class="download-btn" download>
                                        <i class="fa-solid fa-download"></i>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- {{$products->links()}} -->
                <div class="page-nav-wrap pt-5 text-center wow fadeInUp" data-wow-delay=".3s">
                    <ul>
                        @if ($products->onFirstPage())
                        <li class="disabled"><span class="page-numbers icon"><i class="fa-solid fa-arrow-left"></i></span></li>
                        @else
                        <li><a class="page-numbers icon" href="{{ $products->previousPageUrl() }}"><i class="fa-solid fa-arrow-left"></i></a></li>
                        @endif

                        @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                        @if ($page == $products->currentPage())
                        <li><span class="page-numbers active">{{ $page }}</span></li>
                        @else
                        <li><a class="page-numbers" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                        @endforeach

                        @if ($products->hasMorePages())
                        <li><a class="page-numbers icon" href="{{ $products->nextPageUrl() }}"><i class="fa-solid fa-arrow-right"></i></a></li>
                        @else
                        <li class="disabled"><span class="page-numbers icon"><i class="fa-solid fa-arrow-right"></i></span></li>
                        @endif
                    </ul>
                </div>

            </div>
        </section>




    </div>
</div>

@endsection