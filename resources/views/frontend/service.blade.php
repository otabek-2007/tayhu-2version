@extends('layouts.frontend')
@section('content')
<div class="single-page">
    <div class="container">
        <nav aria-label="breadcrumb single-page">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Services</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Page Section Start -->
<div class="tp-product-details-area tp-product-style-2 pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="row ">
                    <div class="col-12">
                        <div class="tp-product-top pb-15">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <div class="tp-product__text">
                                        <span>Showing 1–10 of <i>{{count($products)}}</i> results</span>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <div class="tp-product__filter d-flex justify-content-sm-end">
                                        <select id="filterSelect">
                                            <option value="all" disabled required>Select Filter</option>
                                            <option value="recent" {{ request('filter') == 'recent' ? 'selected' : '' }}>Recently Added</option>
                                            <option value="low_to_high" {{ request('filter') == 'low_to_high' ? 'selected' : '' }}>Low to High</option>
                                            <option value="high_to_low" {{ request('filter') == 'high_to_low' ? 'selected' : '' }}>High to Low</option>
                                            <option value="new_added" {{ request('filter') == 'new_added' ? 'selected' : '' }}>New Added</option>
                                            <option value="on_sale" {{ request('filter') == 'on_sale' ? 'selected' : '' }}>On Sale</option>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="tp-product-wrap">
                    <div class="row">
                        @forelse($products as $product)
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-30">
                            <div class="tp-product-item p-relative">
                                <div class="tp-product-thumb-box p-relative mb-25">
                                    <a href="{{ route('serviceSingle', $product->id) }}">
                                        @if(count($product->images_array) > 0)
                                        @foreach(array_slice($product->images_array, 0, 2) as $image)
                                        <img class="image-{{ $loop->index + 1 }}" src="{{ asset('storage/' . $image) }}" alt="Product Image">
                                        @endforeach
                                        @else
                                        <p>No images available.</p>
                                        @endif
                                    </a>
                                </div>
                                <div class="tp-product-content text-center">
                                    <h4 class="tp-product-title">
                                        <a href="{{ route('serviceSingle', $product->id) }}" class="text-anim">
                                            {!! $product->getTranslatedAttribute('name', app()->getLocale()) !!}
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        @empty
                        <p>No products found.</p>
                        @endforelse
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="basic-pagination mt-20">
                                <nav>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="{{route('catalog')}}">
                                                <i class="fa-solid fa-angles-left"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="sidebar__wrapper sidebar__style-2">
                    <div class="sidebar__widget mb-35">
                        <h3 class="sidebar__widget-title mb-15">search here</h3>
                        <div class="sidebar__widget-content py-3">
                            <div class="sidebar__search">
                                <form action="{{ route('service.search') }}" method="GET">
                                    <div class="sidebar__search-input-2">
                                        <input type="text" name="query" value="{{ request('query') }}" placeholder="Search here....">
                                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__widget mb-45">
                        <h3 class="sidebar__widget-title mb-30">Catagories</h3>
                        <div class="sidebar__widget-content">
                            <ul>
                                @foreach($categories as $category)
                                <li><a href="/service/{{$category->id}}">{{ $category->name }} ({{ $category->products_count }})</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar__widget mb-40">
                        <h3 class="sidebar__widget-title mb-20">Door Size</h3>
                        <div class="sidebar__widget-content content-style-2">
                            <ul>
                                <li><a href="product-list.html"><i class="fa-solid fa-chevron-left"></i>36"x80"
                                        (8)</a></li>
                                <li><a href="product-list.html"><i class="fa-solid fa-chevron-left"></i>36"x96"
                                        (60)</a></li>
                                <li><a href="product-list.html"><i class="fa-solid fa-chevron-left"></i>72"x80"
                                        (7)</a></li>
                                <li><a href="product-list.html"><i class="fa-solid fa-chevron-left"></i>72"x96"
                                        (21)</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- filter  start-->
                    <div class="tp-product-widget mb-25">
                        <h3 class="sidebar__widget-title mb-30">Filter By Price</h3>
                        <div class="tp-product-widget-content">
                            <div class="tp-product-widget-filter">
                                <div id="slider-range" class="mb-10"></div>
                                <div
                                    class="tp-product-widget-filter-info d-flex align-items-center justify-content-between">
                                    <span class="input-range">
                                        <input type="text" id="amount" readonly="">
                                    </span>
                                    <button class="tp-product-widget-filter-btn" type="button">Filter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- filter  end-->
                    <div class="sidebar__widget">
                        <h3 class="sidebar__widget-title mb-35">Populer Tags</h3>
                        <div class="sidebar__widget-content">
                            <div class="tagcloud">
                                <a href="#">Window</a>
                                <a href="#">Doors</a>
                                <a href="#">Chair</a>
                                <a href="#">Security</a>
                                <a href="#">Locker</a>
                                <a href="#">Handle</a>
                                <a href="#">Hardware</a>
                                <a href="#">Smart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('#filterSelect').addEventListener('change', function() {
            console.log(document.querySelector('#filterSelect'))
            console.log('Filter select changed');
            // const selectedFilter = this.value;
            // const params = new URLSearchParams(window.location.search);
            // if (selectedFilter) {
            //     params.set('filter', selectedFilter);
            // } else {
            //     params.delete('filter');
            // }
            
            // const baseUrl = "{{ route('service.search') }}";
            // console.log(`Redirecting to: ${baseUrl}?${params.toString()}`);
            // window.location.href = `${baseUrl}?${params.toString()}`;
        });
    });
</script>
<!-- Page End -->
@endsection