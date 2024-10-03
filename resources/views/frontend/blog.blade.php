@extends('layouts.frontend')
@section('content')
    <div class="single-page">
        <div class="container">
            <nav aria-label="breadcrumb single-page">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Blog Section Start -->
    <section id="page" class="blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title">
                        <h2>Our Blog</h2>
                        <h5>Read our latest news</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4 wow fadeInLeft" data-wow-delay="0.2s">
                    <a href="single-blog.html">
                        <div class="card flip">
                            <img class="card-img" src="assets/images/news/blog-1.jpg" alt="blog image">
                            <div class="card-body">
                                <h4 class="card-title">Top Trends in Modern Construction Design</h4>
                                <div class="blog-text">
                                    <p>Discover the latest trends shaping the world of modern construction design. From sustainable materials to innovative building techniques, explore how these trends are reshaping the industry and inspiring new possibilities for your projects.</p>
                                </div>
                                <div class="blog-bottom-text-link">
                                    <span class="date">January 10, 2024</span>
                                    <span class="red-text">Read Story</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-12 col-md-4 wow fadeInLeft" data-wow-delay="0.2s">
                    <a href="single-blog.html">
                        <div class="card flip">
                            <img class="card-img" src="assets/images/news/blog-2.jpg" alt="blog image">
                            <div class="card-body">
                                <h4 class="card-title">Tips for a Successful Construction Project</h4>
                                <div class="blog-text">
                                    <p>Learn valuable tips and insights to ensure a successful construction project. From effective project planning to managing budgets and timelines, discover strategies for minimizing risks, maximizing efficiency, and achieving your construction goals.</p>
                                </div>
                                <div class="blog-bottom-text-link">
                                    <span class="date">March 10, 2024</span>
                                    <span class="red-text">Read Story</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-12 col-md-4 wow fadeInLeft" data-wow-delay="0.2s">
                    <a href="single-blog.html">
                        <div class="card flip">
                            <img class="card-img" src="assets/images/news/blog-3.jpg" alt="blog image">
                            <div class="card-body">
                                <h4 class="card-title">Innovations in Construction Technology</h4>
                                <div class="blog-text">
                                    <p>Dive into the exciting world of smart homes and explore the cutting-edge technologies transforming residential construction. From automated systems to energy-efficient solutions, learn how these innovations are revolutionizing the way we live.</p>
                                </div>
                                <div class="blog-bottom-text-link">
                                    <span class="date">October 10, 2024</span>
                                    <span class="red-text">Read Story</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-12">
                    <div class="blog-more-btn text-center mt-15">
                        <a class="theme-button-light" href="blogs.html">View More Blogs<span></span></a>
                    </div>
                </div>

                <!-- Pagination Starts -->
                <div class="col-12 mt-4">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center mb-0">
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Pagination Ends -->
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

@endsection
