@extends('layouts.frontend')
@section('content')
    <div class="single-page">
        <div class="container">
            <nav aria-label="breadcrumb single-page">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="blogs.html">Blogs</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Single Blog</li>
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
                        <h2>Blog Title Here</h2>
                        <h5>Your Guide to Launching Your Online Presence</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="0.2s">
                    <img src="assets/images/single-page-header.jpg" alt="image" class="mb-30">
                    <p>Whether you're a seasoned blogger or just starting out, understanding the basics of domain and hosting is crucial for getting your website online. This guide will break down everything you need to know about these two essential components, so you can launch your blog with confidence.</p>

                    <h2>Your Blog's Home on the Web</h2>

                    <ul>
                        <li>Keep it short and easy to remember.</li>
                        <li>Use keywords related to your blog's topic.</li>
                        <li>Avoid using hyphens or numbers.</li>
                        <li>Make sure it's available (you can use a domain registrar's search tool to check).</li>
                    </ul>

                    <p>Once you've chosen a domain name, you need to register it with a domain registrar. This will give you ownership of the name for a specific period, typically one year.</p>

                    <h2>Some Headings Here</h2>

                    <ul>
                        <li>Keep it short and easy to remember.</li>
                        <li>Use keywords related to your blog's topic.</li>
                        <li>Avoid using hyphens or numbers.</li>
                        <li>Make sure it's available (you can use a domain registrar's search tool to check).</li>
                    </ul>

                    <h2>Additional Tips</h2>

                    <ul>
                        <li>Keep it short and easy to remember.</li>
                        <li>Use keywords related to your blog's topic.</li>
                        <li>Avoid using hyphens or numbers.</li>
                        <li>Make sure it's available (you can use a domain registrar's search tool to check).</li>
                    </ul>

                    <p>Once you've registered a domain name and chosen a web hosting provider, you need to connect them. This typically involves changing your domain's nameservers to point to your web host's servers.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page End -->

@endsection
