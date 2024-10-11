@extends('layouts.frontend')
@section('content')
<div class="single-page">
    <div class="container">
        <nav aria-label="breadcrumb single-page">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Projects</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Page Section Start -->
<!-- Gallery Section Start -->
<section id="gallery" class="gallery-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title">
                    <h2><x-translation key="our_project" /></h2>
                    <h5><x-translation key="our_project_text" /></h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="gallery-list">
                    <ul class="nav" id="gallery-flters">
                        <li class="filter filter-active" data-filter=".all"><x-translation key="all_link" /><span></span></li>
                        <li class="filter" data-filter=".Construction"><x-translation key="construction_link" /><span></span></li>
                        <li class="filter" data-filter=".Electrical"><x-translation key="electrical_link" /><span></span></li>
                        <li class="filter" data-filter=".Architect"><x-translation key="architect_link" /><span></span></li>
                        <li class="filter" data-filter=".Building"><x-translation key="building_link" /><span></span></li>
                    </ul>
                </div>
            </div>
            <div class="gallery-container">
                <div class="row"> <!-- Add a row here to wrap the grid items -->
                    <!-- Electrical Projects -->
                    @foreach($electrical as $project)
                    <div class="col-lg-3 col-md-4 col-sm-6 gallery-grid-item Electrical all">
                        <div class="gallery-item">
                            @if(is_array($project->images_array) && count($project->images_array) > 0)
                            <img class="image-1" src="{{ asset('storage/' . $project->images_array[0]) }}" alt="Product Image">
                            @else
                            <p>No images available.</p>
                            @endif
                            <div class="gallery-img-overlay">
                                <div class="gallery-content">
                                    <div class="top">
                                        <a href="/project-single/{{$project->id}}" class="poplink mr-7">
                                            <span class="icon"><i class="fa fa-link" aria-hidden="true"></i></span>
                                        </a>
                                        <a href="assets/images/photos/gallery-1.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="/project-single/{{$project->id}}" class="poplink">
                                            {{ $project->getTranslatedAttribute('title') }} <!-- Use the project title dynamically -->
                                        </a>
                                        <p>{!! Str::words($project->getTranslatedAttribute('content', app()->getLocale()), 3, '...') !!}</p> <!-- Dynamic project description -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    <!-- Building Projects -->
                    @foreach($building as $project)
                    <div class="col-lg-3 col-md-4 col-sm-6 gallery-grid-item Building all">
                        <div class="gallery-item">
                            @if(is_array($project->images_array) && count($project->images_array) > 0)
                            <img class="image-1" src="{{ asset('storage/' . $project->images_array[0]) }}" alt="Product Image">
                            @else
                            <p>No images available.</p>
                            @endif
                            <div class="gallery-img-overlay">
                                <div class="gallery-content">
                                    <div class="top">
                                        <a href="/project-single/{{$project->id}}" class="poplink mr-7">
                                            <span class="icon"><i class="fa fa-link" aria-hidden="true"></i></span>
                                        </a>
                                        <a href="assets/images/photos/gallery-1.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="/project-single/{{$project->id}}" class="poplink">
                                            {{ $project->getTranslatedAttribute('title') }} <!-- Use the project title dynamically -->
                                        </a>
                                        <p>{!! Str::words($project->getTranslatedAttribute('content', app()->getLocale()), 3, '...') !!}</p> <!-- Dynamic project description -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <!-- Construction Projects -->
                    @foreach($construction as $project)
                    <div class="col-lg-3 col-md-4 col-sm-6 gallery-grid-item Construction all">
                        <div class="gallery-item">
                            @if(is_array($project->images_array) && count($project->images_array) > 0)
                            <img class="image-1" src="{{ asset('storage/' . $project->images_array[0]) }}" alt="Product Image">
                            @else
                            <p>No images available.</p>
                            @endif

                            <div class="gallery-img-overlay">
                                <div class="gallery-content">
                                    <div class="top">
                                        <a href="/project-single/{{$project->id}}" class="poplink mr-7">
                                            <span class="icon"><i class="fa fa-link" aria-hidden="true"></i></span>
                                        </a>
                                        <a href="assets/images/photos/gallery-1.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="/project-single/{{$project->id}}" class="poplink">
                                            {{ $project->getTranslatedAttribute('title') }} <!-- Use the project title dynamically -->
                                        </a>
                                        <p>{!! Str::words($project->getTranslatedAttribute('content', app()->getLocale()), 3, '...') !!}</p> <!-- Dynamic project description -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <!-- Architect Projects -->
                    @foreach($architect as $project)
                    <div class="col-lg-3 col-md-4 col-sm-6 gallery-grid-item Architect all">
                        <div class="gallery-item">
                            @if(count($project->images_array) > 0)
                            <img class="image-1" src="{{ asset('storage/' . $project->images_array[0]) }}" alt="Product Image">
                            @else
                            <p>No images available.</p>
                            @endif

                            <div class="gallery-img-overlay">
                                <div class="gallery-content">
                                    <div class="top">
                                        <a href="/project-single/{{$project->id}}" class="poplink mr-7">
                                            <span class="icon"><i class="fa fa-link" aria-hidden="true"></i></span>
                                        </a>
                                        <a href="assets/images/photos/gallery-1.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="/project-single/{{$project->id}}" class="poplink">
                                            {{ $project->getTranslatedAttribute('title') }} <!-- Use the project title dynamically -->
                                        </a>
                                        <p>{!! Str::words($project->getTranslatedAttribute('content', app()->getLocale()), 3, '...') !!}</p> <!-- Dynamic project description -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div> <!-- Close the row here -->
            </div>
        </div>
    </div>
</section>
<!-- Gallery Section End -->

<!-- Page End -->
@endsection