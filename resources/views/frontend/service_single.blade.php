@extends('layouts.frontend')
@section('content')
    <div class="single-page">
        <div class="container">
            <nav aria-label="breadcrumb single-page">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Construction Service</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- details area start -->
    <div class="product-details-area pt-120">
        <div class="tp-product-details-top pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="tp-product-details-thumb-wrapper tp-tab">
                            <div class="tab-content m-img" id="productDetailsNavContent">
                                <div class="tab-pane fade active show" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab" tabindex="0">
                                    <div class="tp-product-details-nav-main-thumb">
                                        <img src="assets/images/product/details/img-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab" tabindex="0">
                                    <div class="tp-product-details-nav-main-thumb">
                                        <img src="assets/images/product/details/img-4.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-3-tab" tabindex="0">
                                    <div class="tp-product-details-nav-main-thumb">
                                        <img src="assets/images/product/details/img-5.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-4-tab" tabindex="0">
                                    <div class="tp-product-details-nav-main-thumb">
                                        <img src="assets/images/product/details/img-6.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <nav>
                                <div class="nav nav-tabs d-flex justify-content-center justify-content-lg-start" id="productDetailsNavThumb" role="tablist">
                                    <button class="nav-link active" id="nav-1-tab" data-bs-toggle="tab" data-bs-target="#nav-1" type="button" role="tab" aria-controls="nav-1" aria-selected="true">
                                        <img src="assets/images/product/details/img-2.jpg" alt="">
                                    </button>
                                    <button class="nav-link" id="nav-2-tab" data-bs-toggle="tab" data-bs-target="#nav-2" type="button" role="tab" aria-controls="nav-2" aria-selected="false" tabindex="-1">
                                        <img src="assets/images/product/details/img-4.jpg" alt="">
                                    </button>
                                    <button class="nav-link" id="nav-3-tab" data-bs-toggle="tab" data-bs-target="#nav-3" type="button" role="tab" aria-controls="nav-3" aria-selected="false" tabindex="-1">
                                        <img src="assets/images/product/details/img-5.jpg" alt="">
                                    </button>
                                    <button class="nav-link" id="nav-4-tab" data-bs-toggle="tab" data-bs-target="#nav-4" type="button" role="tab" aria-controls="nav-4" aria-selected="false" tabindex="-1">
                                        <img src="assets/images/product/details/img-6.jpg" alt="">
                                    </button>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <!-- col end -->
                    <div class="col-xl-6 col-lg-6">
                        <div class="tp-product-details-wrapper">
                            <div class="tp-product-details-title-content">
                                <h3 class="single-product-title d-inline-block mb-20">Wooden Doors</h3>
                                <span>-34%</span>
                            </div>
                            <!-- inventory details -->
                            <div class="tp-product-details-inventory d-sm-flex flex-wrap align-items-center mb-20">
                                <div class="tp-product-details-stock">
                                    <h4>Brand: <span class="brand-type"> DSA Doors</span></h4>
                                </div>
                                <div class="tp-product-details-rating-wrapper d-flex align-items-center">
                                    <div class="tp-product-details-rating">
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                    </div>
                                    <div class="tp-product-details-reviews">
                                        <span>(36 Reviews)</span>
                                    </div>
                                </div>
                            </div>
                            <p class="tp-product-details-price-dsc mb-25">There are many variations of passages of Lorem
                                Ipsum
                                available, but majority have suffered teration in some form, by injected humour, or
                                randomised words
                                which don't look even slight believable. If you are going to use a passa</p>
                            <!-- model -->
                            <div class="tp-product-details-model">
                                <h4>Model: <span> Flores 3-Lite-Diamond 8/0 E-01-1SL</span></h4>
                            </div>
                            <!-- actions -->
                            <div class="tp-product-details-action-wrapper">
                                <h3 class="tp-product-details-action-title mb-10">Door Size (WxH)</h3>
                                <div class="tp-product-filter tp-product-details-size-filter mb-60">
                                    <select class="d-none">
                                        <option>36''x96'' (3'-0"x8'-0")</option>
                                        <option>14 x 84 (1-2 x 7-0) 200items</option>
                                        <option>12 x 80 (1-0 x 6-8)</option>
                                        <option>12 x 84 (1-0 x 7-0) 165items</option>
                                        <option>15 x 96 (1-3 x 8-0) 166</option>
                                    </select>
                                    <div class="nice-select" tabindex="0">
                                        <span class="current">36''x96'' (3'-0"x8'-0")</span>
                                        <ul class="list">
                                            <li data-value="Default Sorting" class="option selected focus">36''x96''
                                                (3'-0"x8'-0")</li>
                                            <li data-value="Low to Hight" class="option">36''x96'' (3'-0"x8'-0")</li>
                                            <li data-value="High to Low" class="option">14 x 84 (1-2 x 7-0) 200items</li>
                                            <li data-value="New Added" class="option">12 x 80 (1-0 x 6-8)</li>
                                            <li data-value="On Sale" class="option">12 x 84 (1-0 x 7-0) 165items</li>
                                            <li data-value="On Sale" class="option">14 x 78 (1-2 x 6-6) 37items</li>
                                            <li data-value="On Sale" class="option">15 x 96 (1-3 x 8-0) 166</li>
                                            <li data-value="On Sale" class="option">15 x 84 (1-3 x 7-0)</li>
                                        </ul>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <!-- price -->
                            <div class="tp-product-details-price-wrapper mt- mb-35">
                                <span class="tp-product-details-price new-price">$4,600.00</span>
                                <span class="tp-product-details-price old-price">$5,600.00</span>
                            </div>
                            <div class="tp-product-details-action-item-wrapper mb-30 d-sm-flex flex-wrap align-items-center">
                                <div class="tp-product-details-add-to-cart">
                                    <button class="tp-product-details-add-to-cart-btn w-100">ADD TO CART</button>
                                </div>
                                <div class="tp-product-details-bookmarks mr-35">
                                    <span><i class="fa-regular fa-star"></i></span>
                                </div>
                                <div class="tp-product-info">
                                    <div class="tp-product-details-quantity">
                                        <div class="tp-product-quantity">
                                            <input class="tp-cart-input" type="text" value="1">
                                            <span class="tp-cart-plus">
                                    <i class="fa-solid fa-angle-up"></i>
                                   </span>
                                            <span class="tp-cart-minus">
                                    <i class="fa-solid fa-angle-down"></i>
                                   </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-product-details-delivery-text">
                                <p>GROUND DELIVERY SURCHARGE: $180.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tp-product-details-bottom grey-bg pt-120 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-product-details-tab-box tp-tab">
                            <nav>
                                <div class="nav nav-tabs tp-product-tab" id="navPresentationTab" role="tablist">
                                    <button class="nav-link active" id="nav-description-tab" data-bs-toggle="tab" data-bs-target="#nav-description" type="button" role="tab" aria-controls="nav-description" aria-selected="false" tabindex="-1">PRODUCT
                                        DETAILS</button>
                                    <button class="nav-link" id="nav-addInfo-tab" data-bs-toggle="tab" data-bs-target="#nav-addInfo" type="button" role="tab" aria-controls="nav-addInfo" aria-selected="true">ADDITIONNAL INFORMATION</button>
                                    <button class="nav-link" id="nav-review-tab" data-bs-toggle="tab" data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review" aria-selected="false" tabindex="-1">REVIES
                                        (2)</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="navPresentationTabContent">
                                <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab" tabindex="0">
                                    <div class="tp-product-details-desc-wrapper pt-80">
                                        <h3 class="mb-30">Experience is over the world visit</h3>
                                        <p class="mb-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                            vulputate
                                            vestibulum Phasellus rhoncus, dolor eget viverra pretium, dolor tellus aliquet nunc
                                            vitae
                                            ultricies erat elit eu lacus. Vestibulum non justo consectetur, cursus ante,
                                            tincidunt sapien.
                                            Nulla quis diam sit amet turpis interdum accumsan quis necenim. Vivamus faucibus ex
                                            sed nibh
                                            egestas elementum. Mauris et bibendum dui. Aenean consequat pulvinar luctus</p>
                                        <div class="tp-product-details-desc-inner">
                                            <h3 class="inner-title mb-30">More Details</h3>
                                            <div class="row align-items-center mb-45">
                                                <div class="col-lg-6">
                                                    <div class="postbox-list-wrapper">
                                                        <ul>
                                                            <li>
                                                  <span>
                                                     <svg width="12" height="10" viewbox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.2155 1.116C10.3035 1.948 9.41553 2.916 8.55153 4.02C7.79953 4.972 7.12353 5.948 6.52353 6.948C5.97953 7.844 5.58353 8.612 5.33553 9.252C5.32753 9.276 5.31153 9.296 5.28753 9.312C5.26353 9.336 5.23553 9.348 5.20353 9.348C5.19553 9.356 5.18753 9.36 5.17953 9.36C5.12353 9.36 5.08353 9.344 5.05953 9.312L0.775531 4.956C0.767531 4.948 0.871531 4.844 1.08753 4.644C1.30353 4.436 1.51553 4.248 1.72353 4.08C1.95553 3.888 2.07953 3.8 2.09553 3.816L4.44753 5.664C5.13553 4.856 5.90753 4.056 6.76353 3.264C8.05153 2.08 9.37953 1.072 10.7475 0.24C10.7715 0.24 10.8635 0.352 11.0235 0.576L11.2635 0.924C11.2715 0.956 11.2715 0.992 11.2635 1.032C11.2555 1.064 11.2395 1.092 11.2155 1.116Z" fill="currentColor"></path>
                                                     </svg>
                                                  </span>Lorem Ipsum generators on the tend to repeat.
                                                            </li>
                                                            <li>
                                                  <span>
                                                     <svg width="12" height="10" viewbox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.2155 1.116C10.3035 1.948 9.41553 2.916 8.55153 4.02C7.79953 4.972 7.12353 5.948 6.52353 6.948C5.97953 7.844 5.58353 8.612 5.33553 9.252C5.32753 9.276 5.31153 9.296 5.28753 9.312C5.26353 9.336 5.23553 9.348 5.20353 9.348C5.19553 9.356 5.18753 9.36 5.17953 9.36C5.12353 9.36 5.08353 9.344 5.05953 9.312L0.775531 4.956C0.767531 4.948 0.871531 4.844 1.08753 4.644C1.30353 4.436 1.51553 4.248 1.72353 4.08C1.95553 3.888 2.07953 3.8 2.09553 3.816L4.44753 5.664C5.13553 4.856 5.90753 4.056 6.76353 3.264C8.05153 2.08 9.37953 1.072 10.7475 0.24C10.7715 0.24 10.8635 0.352 11.0235 0.576L11.2635 0.924C11.2715 0.956 11.2715 0.992 11.2635 1.032C11.2555 1.064 11.2395 1.092 11.2155 1.116Z" fill="currentColor"></path>
                                                     </svg>
                                                  </span> If you are going to use a passage.
                                                            </li>
                                                            <li>
                                                  <span>
                                                     <svg width="12" height="10" viewbox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.2155 1.116C10.3035 1.948 9.41553 2.916 8.55153 4.02C7.79953 4.972 7.12353 5.948 6.52353 6.948C5.97953 7.844 5.58353 8.612 5.33553 9.252C5.32753 9.276 5.31153 9.296 5.28753 9.312C5.26353 9.336 5.23553 9.348 5.20353 9.348C5.19553 9.356 5.18753 9.36 5.17953 9.36C5.12353 9.36 5.08353 9.344 5.05953 9.312L0.775531 4.956C0.767531 4.948 0.871531 4.844 1.08753 4.644C1.30353 4.436 1.51553 4.248 1.72353 4.08C1.95553 3.888 2.07953 3.8 2.09553 3.816L4.44753 5.664C5.13553 4.856 5.90753 4.056 6.76353 3.264C8.05153 2.08 9.37953 1.072 10.7475 0.24C10.7715 0.24 10.8635 0.352 11.0235 0.576L11.2635 0.924C11.2715 0.956 11.2715 0.992 11.2635 1.032C11.2555 1.064 11.2395 1.092 11.2155 1.116Z" fill="currentColor"></path>
                                                     </svg>
                                                  </span> Lorem Ipsum generators on the tend to repeat.
                                                            </li>
                                                            <li>
                                                  <span>
                                                     <svg width="12" height="10" viewbox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.2155 1.116C10.3035 1.948 9.41553 2.916 8.55153 4.02C7.79953 4.972 7.12353 5.948 6.52353 6.948C5.97953 7.844 5.58353 8.612 5.33553 9.252C5.32753 9.276 5.31153 9.296 5.28753 9.312C5.26353 9.336 5.23553 9.348 5.20353 9.348C5.19553 9.356 5.18753 9.36 5.17953 9.36C5.12353 9.36 5.08353 9.344 5.05953 9.312L0.775531 4.956C0.767531 4.948 0.871531 4.844 1.08753 4.644C1.30353 4.436 1.51553 4.248 1.72353 4.08C1.95553 3.888 2.07953 3.8 2.09553 3.816L4.44753 5.664C5.13553 4.856 5.90753 4.056 6.76353 3.264C8.05153 2.08 9.37953 1.072 10.7475 0.24C10.7715 0.24 10.8635 0.352 11.0235 0.576L11.2635 0.924C11.2715 0.956 11.2715 0.992 11.2635 1.032C11.2555 1.064 11.2395 1.092 11.2155 1.116Z" fill="currentColor"></path>
                                                     </svg>
                                                  </span> Lorem Ipsum generators on the tend to repeat.
                                                            </li>
                                                            <li>
                                                  <span>
                                                     <svg width="12" height="10" viewbox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.2155 1.116C10.3035 1.948 9.41553 2.916 8.55153 4.02C7.79953 4.972 7.12353 5.948 6.52353 6.948C5.97953 7.844 5.58353 8.612 5.33553 9.252C5.32753 9.276 5.31153 9.296 5.28753 9.312C5.26353 9.336 5.23553 9.348 5.20353 9.348C5.19553 9.356 5.18753 9.36 5.17953 9.36C5.12353 9.36 5.08353 9.344 5.05953 9.312L0.775531 4.956C0.767531 4.948 0.871531 4.844 1.08753 4.644C1.30353 4.436 1.51553 4.248 1.72353 4.08C1.95553 3.888 2.07953 3.8 2.09553 3.816L4.44753 5.664C5.13553 4.856 5.90753 4.056 6.76353 3.264C8.05153 2.08 9.37953 1.072 10.7475 0.24C10.7715 0.24 10.8635 0.352 11.0235 0.576L11.2635 0.924C11.2715 0.956 11.2715 0.992 11.2635 1.032C11.2555 1.064 11.2395 1.092 11.2155 1.116Z" fill="currentColor"></path>
                                                     </svg>
                                                  </span> If you are going to use a passage.
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="postbox-list-wrapper">
                                                        <ul>
                                                            <li>
                                                  <span>
                                                     <svg width="12" height="10" viewbox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.2155 1.116C10.3035 1.948 9.41553 2.916 8.55153 4.02C7.79953 4.972 7.12353 5.948 6.52353 6.948C5.97953 7.844 5.58353 8.612 5.33553 9.252C5.32753 9.276 5.31153 9.296 5.28753 9.312C5.26353 9.336 5.23553 9.348 5.20353 9.348C5.19553 9.356 5.18753 9.36 5.17953 9.36C5.12353 9.36 5.08353 9.344 5.05953 9.312L0.775531 4.956C0.767531 4.948 0.871531 4.844 1.08753 4.644C1.30353 4.436 1.51553 4.248 1.72353 4.08C1.95553 3.888 2.07953 3.8 2.09553 3.816L4.44753 5.664C5.13553 4.856 5.90753 4.056 6.76353 3.264C8.05153 2.08 9.37953 1.072 10.7475 0.24C10.7715 0.24 10.8635 0.352 11.0235 0.576L11.2635 0.924C11.2715 0.956 11.2715 0.992 11.2635 1.032C11.2555 1.064 11.2395 1.092 11.2155 1.116Z" fill="currentColor"></path>
                                                     </svg>
                                                  </span>Lorem Ipsum generators on the tend to repeat.
                                                            </li>
                                                            <li>
                                                  <span>
                                                     <svg width="12" height="10" viewbox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.2155 1.116C10.3035 1.948 9.41553 2.916 8.55153 4.02C7.79953 4.972 7.12353 5.948 6.52353 6.948C5.97953 7.844 5.58353 8.612 5.33553 9.252C5.32753 9.276 5.31153 9.296 5.28753 9.312C5.26353 9.336 5.23553 9.348 5.20353 9.348C5.19553 9.356 5.18753 9.36 5.17953 9.36C5.12353 9.36 5.08353 9.344 5.05953 9.312L0.775531 4.956C0.767531 4.948 0.871531 4.844 1.08753 4.644C1.30353 4.436 1.51553 4.248 1.72353 4.08C1.95553 3.888 2.07953 3.8 2.09553 3.816L4.44753 5.664C5.13553 4.856 5.90753 4.056 6.76353 3.264C8.05153 2.08 9.37953 1.072 10.7475 0.24C10.7715 0.24 10.8635 0.352 11.0235 0.576L11.2635 0.924C11.2715 0.956 11.2715 0.992 11.2635 1.032C11.2555 1.064 11.2395 1.092 11.2155 1.116Z" fill="currentColor"></path>
                                                     </svg>
                                                  </span> If you are going to use a passage.
                                                            </li>
                                                            <li>
                                                  <span>
                                                     <svg width="12" height="10" viewbox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.2155 1.116C10.3035 1.948 9.41553 2.916 8.55153 4.02C7.79953 4.972 7.12353 5.948 6.52353 6.948C5.97953 7.844 5.58353 8.612 5.33553 9.252C5.32753 9.276 5.31153 9.296 5.28753 9.312C5.26353 9.336 5.23553 9.348 5.20353 9.348C5.19553 9.356 5.18753 9.36 5.17953 9.36C5.12353 9.36 5.08353 9.344 5.05953 9.312L0.775531 4.956C0.767531 4.948 0.871531 4.844 1.08753 4.644C1.30353 4.436 1.51553 4.248 1.72353 4.08C1.95553 3.888 2.07953 3.8 2.09553 3.816L4.44753 5.664C5.13553 4.856 5.90753 4.056 6.76353 3.264C8.05153 2.08 9.37953 1.072 10.7475 0.24C10.7715 0.24 10.8635 0.352 11.0235 0.576L11.2635 0.924C11.2715 0.956 11.2715 0.992 11.2635 1.032C11.2555 1.064 11.2395 1.092 11.2155 1.116Z" fill="currentColor"></path>
                                                     </svg>
                                                  </span> Lorem Ipsum generators on the tend to repeat.
                                                            </li>
                                                            <li>
                                                  <span>
                                                     <svg width="12" height="10" viewbox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.2155 1.116C10.3035 1.948 9.41553 2.916 8.55153 4.02C7.79953 4.972 7.12353 5.948 6.52353 6.948C5.97953 7.844 5.58353 8.612 5.33553 9.252C5.32753 9.276 5.31153 9.296 5.28753 9.312C5.26353 9.336 5.23553 9.348 5.20353 9.348C5.19553 9.356 5.18753 9.36 5.17953 9.36C5.12353 9.36 5.08353 9.344 5.05953 9.312L0.775531 4.956C0.767531 4.948 0.871531 4.844 1.08753 4.644C1.30353 4.436 1.51553 4.248 1.72353 4.08C1.95553 3.888 2.07953 3.8 2.09553 3.816L4.44753 5.664C5.13553 4.856 5.90753 4.056 6.76353 3.264C8.05153 2.08 9.37953 1.072 10.7475 0.24C10.7715 0.24 10.8635 0.352 11.0235 0.576L11.2635 0.924C11.2715 0.956 11.2715 0.992 11.2635 1.032C11.2555 1.064 11.2395 1.092 11.2155 1.116Z" fill="currentColor"></path>
                                                     </svg>
                                                  </span> Lorem Ipsum generators on the tend to repeat.
                                                            </li>
                                                            <li>
                                                  <span>
                                                     <svg width="12" height="10" viewbox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.2155 1.116C10.3035 1.948 9.41553 2.916 8.55153 4.02C7.79953 4.972 7.12353 5.948 6.52353 6.948C5.97953 7.844 5.58353 8.612 5.33553 9.252C5.32753 9.276 5.31153 9.296 5.28753 9.312C5.26353 9.336 5.23553 9.348 5.20353 9.348C5.19553 9.356 5.18753 9.36 5.17953 9.36C5.12353 9.36 5.08353 9.344 5.05953 9.312L0.775531 4.956C0.767531 4.948 0.871531 4.844 1.08753 4.644C1.30353 4.436 1.51553 4.248 1.72353 4.08C1.95553 3.888 2.07953 3.8 2.09553 3.816L4.44753 5.664C5.13553 4.856 5.90753 4.056 6.76353 3.264C8.05153 2.08 9.37953 1.072 10.7475 0.24C10.7715 0.24 10.8635 0.352 11.0235 0.576L11.2635 0.924C11.2715 0.956 11.2715 0.992 11.2635 1.032C11.2555 1.064 11.2395 1.092 11.2155 1.116Z" fill="currentColor"></path>
                                                     </svg>
                                                  </span> If you are going to use a passage.
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-addInfo" role="tabpanel" aria-labelledby="nav-addInfo-tab" tabindex="0">
                                    <div class="tp-product-details-additional-info">
                                        <div class="row">
                                            <div class="col-xl-10">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td>Color</td>
                                                        <td>Gray, Dark gray, Mystic black</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Graphics Coprocessor</td>
                                                        <td>Exynos 9611, Octa Core (4x2.3GHz + 4x1.7GHz)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Wireless Type</td>
                                                        <td>802.11a/b/g/n/ac, Bluetooth</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Average (in hours)</td>
                                                        <td>08 Hours</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Series</td>
                                                        <td>Black Galaxy Lite</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Item model number</td>
                                                        <td>SM-P6102ZAEXOR</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hardware Platform</td>
                                                        <td>Fluid back</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Operating System</td>
                                                        <td>Wooden</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Product Dimensions</td>
                                                        <td>0.28 x 6.07 x 9.63 inches</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab" tabindex="0">
                                    <div class="tp-product-details-review-wrapper pt-60">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="tp-product-details-review-statics">
                                                    <!-- reviews -->
                                                    <div class="tp-product-details-review-list pr-110">
                                                        <h3 class="tp-product-details-review-title">Rating &amp; Review</h3>
                                                        <div class="tp-product-details-review-avater d-flex align-items-start">
                                                            <div class="tp-product-details-review-avater-thumb">
                                                                <a href="#">
                                                                    <img src="assets/images/avatar/user-1.png" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="tp-product-details-review-avater-content">
                                                                <div class="tp-product-details-review-avater-rating d-flex align-items-center">
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                </div>
                                                                <h3 class="tp-product-details-review-avater-title">James Auten</h3>
                                                                <span class="tp-product-details-review-avater-meta">06 March, 2023
                                                  </span>

                                                                <div class="tp-product-details-review-avater-comment">
                                                                    <p>Designed very similarly to the nearly double priced Galaxy tab
                                                                        S6, with the only
                                                                        removal being.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tp-product-details-review-avater d-flex align-items-start">
                                                            <div class="tp-product-details-review-avater-thumb">
                                                                <a href="#">
                                                                    <img src="assets/images/avatar/user-2.png" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="tp-product-details-review-avater-content">
                                                                <div class="tp-product-details-review-avater-rating d-flex align-items-center">
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                </div>
                                                                <h3 class="tp-product-details-review-avater-title">Fabian Riveran
                                                                </h3>
                                                                <span class="tp-product-details-review-avater-meta">06 March, 2023
                                                  </span>

                                                                <div class="tp-product-details-review-avater-comment">
                                                                    <p>This review is for the Samsung Tab S6 Lite, 64gb wifi in blue.
                                                                        purchased this
                                                                        product performed.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- reviews forms submit  -->
                                                <div class="tp-product-details-review-form pt-60">
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <div class="tp-contact-form mb-60">
                                                                <div class="tp-contact-form-content">
                                                                    <h4 class="tp-contact-form-title">Review this product</h4>
                                                                    <p>Your email address will not be published. Required fields are
                                                                        marked *</p>
                                                                </div>
                                                                <div class="tp-contact-form-wrap">
                                                                    <div class="tp-product-details-review-form-rating d-flex align-items-center">
                                                                        <span>Your Rating :</span>
                                                                        <div class="tp-product-details-review-form-rating-icon">
                                                                            <span><i class="fa-solid fa-star"></i></span>
                                                                            <span><i class="fa-solid fa-star"></i></span>
                                                                            <span><i class="fa-solid fa-star"></i></span>
                                                                            <span><i class="fa-solid fa-star"></i></span>
                                                                            <span><i class="fa-solid fa-star"></i></span>
                                                                        </div>
                                                                    </div>
                                                                    <form action="#">
                                                                        <div class="tp-contact-form-input mb-45">
                                                                            <span> <i class="fa-regular fa-user"></i></span>
                                                                            <input type="text" placeholder="Your Name*">
                                                                        </div>
                                                                        <div class="tp-contact-form-input mb-45">
                                                                            <span><i class="fa-regular fa-envelope"></i></span>
                                                                            <input type="email" placeholder="Email Address*">
                                                                        </div>
                                                                        <div class="tp-contact-form-input tp-contact-form-textarea mb-45">
                                                                            <span><i class="fa-regular fa-pen-to-square"></i></span>
                                                                            <textarea placeholder="Enter Your Messege Here"></textarea>
                                                                        </div>
                                                                        <div class="tp-contact-form-submit">
                                                                            <button type="submit" class="tp-btn-theme">Submit</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- details area end -->

    <!-- product area start -->
    <div class="tp-product-area pt-115 pb-110 p-relative fix">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="tp-product-title-box mb-50">
                        <span class="tp-section-subtitle">Featured Window & Door Product</span>
                        <h3 class="tp-section-title">Releated Products</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="tp-prduct-wrapper">
                        <div class="swiper-container tp-product-active-3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="tp-product-item p-relative">
                                        <div class="tp-product-thumb-box p-relative mb-25">
                                            <a href="service-details.html">
                                                <img class="image-1" src="assets/images/product/img-1.jpg" alt="">
                                                <img class="image-2" src="assets/images/product/img-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="tp-product-icon">
                                            <button>
                                                <i>
                                                    <svg width="17" height="17" viewbox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.892 8.16945C16.7401 7.96169 13.1215 3.08252 8.49992 3.08252C3.87833 3.08252 0.259582 7.96169 0.107877 8.16925C-0.035959 8.36634 -0.035959 8.63366 0.107877 8.83076C0.259582 9.03851 3.87833 13.9177 8.49992 13.9177C13.1215 13.9177 16.7401 9.03847 16.892 8.83092C17.036 8.63386 17.036 8.36634 16.892 8.16945ZM8.49992 12.7968C5.09563 12.7968 2.14715 9.5584 1.27434 8.49972C2.14602 7.44011 5.08832 4.20339 8.49992 4.20339C11.904 4.20339 14.8523 7.44123 15.7255 8.50048C14.8538 9.56006 11.9115 12.7968 8.49992 12.7968Z" fill="black"></path>
                                                        <path d="M8.50035 5.13721C6.64622 5.13721 5.1377 6.64573 5.1377 8.49986C5.1377 10.354 6.64622 11.8625 8.50035 11.8625C10.3545 11.8625 11.863 10.354 11.863 8.49986C11.863 6.64573 10.3545 5.13721 8.50035 5.13721ZM8.50035 10.7416C7.26419 10.7416 6.2586 9.73598 6.2586 8.49986C6.2586 7.26374 7.26423 6.25811 8.50035 6.25811C9.73647 6.25811 10.7421 7.26374 10.7421 8.49986C10.7421 9.73598 9.7365 10.7416 8.50035 10.7416Z" fill="black"></path>
                                                    </svg>
                                                </i>
                                                <span class="tp-product__tooltip tp-product__tooltip-right p-relative">Quick
                                         View</span>
                                            </button>
                                            <button>
                                                <i>
                                                    <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13.2073 16.7012C12.9938 16.7014 12.7835 16.6492 12.5948 16.5493L9.08871 14.7066C9.06154 14.6921 9.03121 14.6845 9.0004 14.6845C8.96959 14.6845 8.93925 14.6921 8.91208 14.7066L5.40659 16.5493C5.18935 16.6637 4.94446 16.7149 4.69962 16.6973C4.45478 16.6796 4.21977 16.5938 4.02117 16.4495C3.82257 16.3052 3.66832 16.1082 3.57587 15.8808C3.48341 15.6534 3.45645 15.4047 3.49802 15.1628L4.1674 11.2596C4.17254 11.229 4.1701 11.1976 4.1603 11.1682C4.15049 11.1388 4.13361 11.1122 4.11115 11.0908L1.27727 8.32503C1.10133 8.15361 0.976905 7.93634 0.918109 7.69783C0.859313 7.45932 0.868493 7.20912 0.944609 6.97556C1.02072 6.742 1.16073 6.53443 1.34877 6.37636C1.53681 6.2183 1.76536 6.11606 2.00852 6.08122L5.92521 5.51254C5.95569 5.5081 5.98462 5.49631 6.00952 5.47818C6.03441 5.46004 6.05451 5.43612 6.06809 5.40847L7.81915 1.85629C7.92761 1.63608 8.09556 1.45064 8.30398 1.32096C8.5124 1.19129 8.75296 1.12256 8.99843 1.12256C9.2439 1.12256 9.48446 1.19129 9.69288 1.32096C9.9013 1.45064 10.0693 1.63608 10.1777 1.85629L11.9299 5.40735C11.9436 5.43491 11.9637 5.45876 11.9886 5.47687C12.0135 5.49499 12.0423 5.50684 12.0728 5.51141L15.9928 6.08066C16.2359 6.11569 16.4643 6.21804 16.6522 6.37613C16.8401 6.53422 16.98 6.74174 17.0561 6.97522C17.1322 7.20869 17.1414 7.4588 17.0827 7.69724C17.024 7.93569 16.8998 8.15296 16.7241 8.32447L13.8874 11.0886C13.865 11.11 13.8482 11.1366 13.8384 11.166C13.8286 11.1954 13.8261 11.2268 13.8311 11.2573L14.5005 15.1605C14.5327 15.3491 14.5234 15.5425 14.4733 15.7271C14.4232 15.9118 14.3334 16.0833 14.2103 16.2297C14.0872 16.3761 13.9336 16.494 13.7603 16.575C13.587 16.656 13.3981 16.6983 13.2068 16.699L13.2073 16.7012ZM9.0004 13.5591C9.21373 13.559 9.42384 13.6112 9.6124 13.711L13.1179 15.5532C13.1489 15.5709 13.1845 15.579 13.2202 15.5765C13.2558 15.574 13.2899 15.561 13.3181 15.5391C13.3476 15.5189 13.3705 15.4905 13.384 15.4574C13.3975 15.4243 13.401 15.388 13.3941 15.3529L12.7241 11.4492C12.6884 11.2391 12.7041 11.0234 12.7699 10.8207C12.8357 10.618 12.9497 10.4343 13.1021 10.2853L15.9388 7.52066C15.9642 7.49586 15.982 7.46448 15.9905 7.43005C15.9989 7.39562 15.9976 7.35952 15.9866 7.32583C15.9756 7.29213 15.9554 7.26218 15.9282 7.23936C15.9011 7.21653 15.8682 7.20174 15.8331 7.19666L11.9136 6.62685C11.7026 6.59629 11.5022 6.51482 11.3297 6.38948C11.1572 6.26413 11.0178 6.09868 10.9236 5.90741L9.16915 2.35579C9.15343 2.324 9.12915 2.29724 9.09903 2.27854C9.06891 2.25983 9.03416 2.24991 8.99871 2.24991C8.96325 2.24991 8.9285 2.25983 8.89839 2.27854C8.86827 2.29724 8.84398 2.324 8.82827 2.35579L7.07721 5.90628C6.98293 6.09762 6.84347 6.26312 6.67088 6.38847C6.49829 6.51382 6.29777 6.59525 6.08665 6.62572L2.16771 7.19666C2.13256 7.20163 2.09951 7.21637 2.07233 7.23921C2.04515 7.26204 2.02492 7.29205 2.01396 7.32582C2.003 7.35958 2.00174 7.39575 2.01033 7.4302C2.01891 7.46464 2.037 7.49599 2.06252 7.52066L4.89865 10.2853C5.05106 10.4343 5.16507 10.618 5.2309 10.8207C5.29674 11.0234 5.31244 11.2391 5.27665 11.4492L4.60671 15.3529C4.60063 15.388 4.60452 15.4241 4.61794 15.457C4.63135 15.49 4.65375 15.5185 4.68259 15.5394C4.71143 15.5603 4.74554 15.5726 4.78106 15.5751C4.81657 15.5775 4.85205 15.5699 4.88346 15.5532L8.3884 13.7104C8.57709 13.611 8.78714 13.5591 9.0004 13.5591Z" fill="black"></path>
                                                    </svg>
                                                </i>
                                                <span class="tp-product__tooltip tp-product__tooltip-right p-relative">Rattings</span>
                                            </button>
                                            <button>
                                                <i>
                                                    <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.86634 10.2L5.33301 11.7333V2.66667C5.33301 2.26667 5.06634 2 4.66634 2C4.26634 2 3.99967 2.26667 3.99967 2.66667V11.7333L2.46634 10.2C2.19967 9.93333 1.79967 9.93333 1.53301 10.2C1.26634 10.4667 1.26634 10.8667 1.53301 11.1333L4.19967 13.8C4.26634 13.8667 4.33301 13.9333 4.39967 13.9333C4.46634 14 4.59967 14 4.66634 14C4.73301 14 4.86634 14 4.93301 13.9333C4.99967 13.9333 5.06634 13.8667 5.13301 13.8L7.79967 11.1333C8.06634 10.8667 8.06634 10.4667 7.79967 10.2C7.53301 9.93333 7.13301 9.93333 6.86634 10.2ZM14.4663 4.86667L11.7997 2.2C11.733 2.13333 11.6663 2.06667 11.5997 2.06667C11.533 2 11.3997 2 11.333 2C11.2663 2 11.133 2 11.0663 2.06667C10.9997 2.06667 10.933 2.13333 10.8663 2.2L8.19967 4.86667C7.93301 5.13333 7.93301 5.53333 8.19967 5.8C8.46634 6.06667 8.86634 6.06667 9.13301 5.8L10.6663 4.26667V13.3333C10.6663 13.7333 10.933 14 11.333 14C11.733 14 11.9997 13.7333 11.9997 13.3333V4.26667L13.533 5.8C13.7997 6.06667 14.1997 6.06667 14.4663 5.8C14.733 5.53333 14.733 5.13333 14.4663 4.86667Z" fill="black"></path>
                                                    </svg>
                                                </i>
                                                <span class="tp-product__tooltip tp-product__tooltip-right p-relative">Add To
                                         Cart</span>
                                            </button>
                                        </div>
                                        <div class="tp-product-content text-center">
                                            <h4 class="tp-product-title"><a href="service-details.html" class="text-anim">Solid
                                                    Wooden
                                                    Door</a></h4>
                                            <span>$2362.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tp-product-item p-relative">
                                        <div class="tp-product-thumb-box p-relative mb-25">
                                            <a href="service-details.html">
                                                <img class="image-1" src="assets/images/product/img-2.jpg" alt="">
                                                <img class="image-2" src="assets/images/product/img-3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="tp-product-icon">
                                            <button>
                                                <i>
                                                    <svg width="17" height="17" viewbox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.892 8.16945C16.7401 7.96169 13.1215 3.08252 8.49992 3.08252C3.87833 3.08252 0.259582 7.96169 0.107877 8.16925C-0.035959 8.36634 -0.035959 8.63366 0.107877 8.83076C0.259582 9.03851 3.87833 13.9177 8.49992 13.9177C13.1215 13.9177 16.7401 9.03847 16.892 8.83092C17.036 8.63386 17.036 8.36634 16.892 8.16945ZM8.49992 12.7968C5.09563 12.7968 2.14715 9.5584 1.27434 8.49972C2.14602 7.44011 5.08832 4.20339 8.49992 4.20339C11.904 4.20339 14.8523 7.44123 15.7255 8.50048C14.8538 9.56006 11.9115 12.7968 8.49992 12.7968Z" fill="black"></path>
                                                        <path d="M8.50035 5.13721C6.64622 5.13721 5.1377 6.64573 5.1377 8.49986C5.1377 10.354 6.64622 11.8625 8.50035 11.8625C10.3545 11.8625 11.863 10.354 11.863 8.49986C11.863 6.64573 10.3545 5.13721 8.50035 5.13721ZM8.50035 10.7416C7.26419 10.7416 6.2586 9.73598 6.2586 8.49986C6.2586 7.26374 7.26423 6.25811 8.50035 6.25811C9.73647 6.25811 10.7421 7.26374 10.7421 8.49986C10.7421 9.73598 9.7365 10.7416 8.50035 10.7416Z" fill="black"></path>
                                                    </svg>
                                                </i>
                                                <span class="tp-product__tooltip tp-product__tooltip-right p-relative">Quick
                                         View</span>
                                            </button>
                                            <button>
                                                <i>
                                                    <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13.2073 16.7012C12.9938 16.7014 12.7835 16.6492 12.5948 16.5493L9.08871 14.7066C9.06154 14.6921 9.03121 14.6845 9.0004 14.6845C8.96959 14.6845 8.93925 14.6921 8.91208 14.7066L5.40659 16.5493C5.18935 16.6637 4.94446 16.7149 4.69962 16.6973C4.45478 16.6796 4.21977 16.5938 4.02117 16.4495C3.82257 16.3052 3.66832 16.1082 3.57587 15.8808C3.48341 15.6534 3.45645 15.4047 3.49802 15.1628L4.1674 11.2596C4.17254 11.229 4.1701 11.1976 4.1603 11.1682C4.15049 11.1388 4.13361 11.1122 4.11115 11.0908L1.27727 8.32503C1.10133 8.15361 0.976905 7.93634 0.918109 7.69783C0.859313 7.45932 0.868493 7.20912 0.944609 6.97556C1.02072 6.742 1.16073 6.53443 1.34877 6.37636C1.53681 6.2183 1.76536 6.11606 2.00852 6.08122L5.92521 5.51254C5.95569 5.5081 5.98462 5.49631 6.00952 5.47818C6.03441 5.46004 6.05451 5.43612 6.06809 5.40847L7.81915 1.85629C7.92761 1.63608 8.09556 1.45064 8.30398 1.32096C8.5124 1.19129 8.75296 1.12256 8.99843 1.12256C9.2439 1.12256 9.48446 1.19129 9.69288 1.32096C9.9013 1.45064 10.0693 1.63608 10.1777 1.85629L11.9299 5.40735C11.9436 5.43491 11.9637 5.45876 11.9886 5.47687C12.0135 5.49499 12.0423 5.50684 12.0728 5.51141L15.9928 6.08066C16.2359 6.11569 16.4643 6.21804 16.6522 6.37613C16.8401 6.53422 16.98 6.74174 17.0561 6.97522C17.1322 7.20869 17.1414 7.4588 17.0827 7.69724C17.024 7.93569 16.8998 8.15296 16.7241 8.32447L13.8874 11.0886C13.865 11.11 13.8482 11.1366 13.8384 11.166C13.8286 11.1954 13.8261 11.2268 13.8311 11.2573L14.5005 15.1605C14.5327 15.3491 14.5234 15.5425 14.4733 15.7271C14.4232 15.9118 14.3334 16.0833 14.2103 16.2297C14.0872 16.3761 13.9336 16.494 13.7603 16.575C13.587 16.656 13.3981 16.6983 13.2068 16.699L13.2073 16.7012ZM9.0004 13.5591C9.21373 13.559 9.42384 13.6112 9.6124 13.711L13.1179 15.5532C13.1489 15.5709 13.1845 15.579 13.2202 15.5765C13.2558 15.574 13.2899 15.561 13.3181 15.5391C13.3476 15.5189 13.3705 15.4905 13.384 15.4574C13.3975 15.4243 13.401 15.388 13.3941 15.3529L12.7241 11.4492C12.6884 11.2391 12.7041 11.0234 12.7699 10.8207C12.8357 10.618 12.9497 10.4343 13.1021 10.2853L15.9388 7.52066C15.9642 7.49586 15.982 7.46448 15.9905 7.43005C15.9989 7.39562 15.9976 7.35952 15.9866 7.32583C15.9756 7.29213 15.9554 7.26218 15.9282 7.23936C15.9011 7.21653 15.8682 7.20174 15.8331 7.19666L11.9136 6.62685C11.7026 6.59629 11.5022 6.51482 11.3297 6.38948C11.1572 6.26413 11.0178 6.09868 10.9236 5.90741L9.16915 2.35579C9.15343 2.324 9.12915 2.29724 9.09903 2.27854C9.06891 2.25983 9.03416 2.24991 8.99871 2.24991C8.96325 2.24991 8.9285 2.25983 8.89839 2.27854C8.86827 2.29724 8.84398 2.324 8.82827 2.35579L7.07721 5.90628C6.98293 6.09762 6.84347 6.26312 6.67088 6.38847C6.49829 6.51382 6.29777 6.59525 6.08665 6.62572L2.16771 7.19666C2.13256 7.20163 2.09951 7.21637 2.07233 7.23921C2.04515 7.26204 2.02492 7.29205 2.01396 7.32582C2.003 7.35958 2.00174 7.39575 2.01033 7.4302C2.01891 7.46464 2.037 7.49599 2.06252 7.52066L4.89865 10.2853C5.05106 10.4343 5.16507 10.618 5.2309 10.8207C5.29674 11.0234 5.31244 11.2391 5.27665 11.4492L4.60671 15.3529C4.60063 15.388 4.60452 15.4241 4.61794 15.457C4.63135 15.49 4.65375 15.5185 4.68259 15.5394C4.71143 15.5603 4.74554 15.5726 4.78106 15.5751C4.81657 15.5775 4.85205 15.5699 4.88346 15.5532L8.3884 13.7104C8.57709 13.611 8.78714 13.5591 9.0004 13.5591Z" fill="black"></path>
                                                    </svg>
                                                </i>
                                                <span class="tp-product__tooltip tp-product__tooltip-right p-relative">Rattings</span>
                                            </button>
                                            <button>
                                                <i>
                                                    <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.86634 10.2L5.33301 11.7333V2.66667C5.33301 2.26667 5.06634 2 4.66634 2C4.26634 2 3.99967 2.26667 3.99967 2.66667V11.7333L2.46634 10.2C2.19967 9.93333 1.79967 9.93333 1.53301 10.2C1.26634 10.4667 1.26634 10.8667 1.53301 11.1333L4.19967 13.8C4.26634 13.8667 4.33301 13.9333 4.39967 13.9333C4.46634 14 4.59967 14 4.66634 14C4.73301 14 4.86634 14 4.93301 13.9333C4.99967 13.9333 5.06634 13.8667 5.13301 13.8L7.79967 11.1333C8.06634 10.8667 8.06634 10.4667 7.79967 10.2C7.53301 9.93333 7.13301 9.93333 6.86634 10.2ZM14.4663 4.86667L11.7997 2.2C11.733 2.13333 11.6663 2.06667 11.5997 2.06667C11.533 2 11.3997 2 11.333 2C11.2663 2 11.133 2 11.0663 2.06667C10.9997 2.06667 10.933 2.13333 10.8663 2.2L8.19967 4.86667C7.93301 5.13333 7.93301 5.53333 8.19967 5.8C8.46634 6.06667 8.86634 6.06667 9.13301 5.8L10.6663 4.26667V13.3333C10.6663 13.7333 10.933 14 11.333 14C11.733 14 11.9997 13.7333 11.9997 13.3333V4.26667L13.533 5.8C13.7997 6.06667 14.1997 6.06667 14.4663 5.8C14.733 5.53333 14.733 5.13333 14.4663 4.86667Z" fill="black"></path>
                                                    </svg>
                                                </i>
                                                <span class="tp-product__tooltip tp-product__tooltip-right p-relative">Add To
                                         Cart</span>
                                            </button>
                                        </div>
                                        <div class="tp-product-item-sale">
                                            <span>Sale</span>
                                        </div>
                                        <div class="tp-product-content text-center">
                                            <h4 class="tp-product-title"><a href="service-details.html" class="text-anim">Solid
                                                    Wooden Glass
                                                    Door</a></h4>
                                            <span>$2362.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tp-product-item p-relative">
                                        <div class="tp-product-thumb-box p-relative mb-25">
                                            <a href="service-details.html">
                                                <img class="image-1" src="assets/images/product/img-3.jpg" alt="">
                                                <img class="image-2" src="assets/images/product/img-4.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="tp-product-icon">
                                            <button>
                                                <i>
                                                    <svg width="17" height="17" viewbox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.892 8.16945C16.7401 7.96169 13.1215 3.08252 8.49992 3.08252C3.87833 3.08252 0.259582 7.96169 0.107877 8.16925C-0.035959 8.36634 -0.035959 8.63366 0.107877 8.83076C0.259582 9.03851 3.87833 13.9177 8.49992 13.9177C13.1215 13.9177 16.7401 9.03847 16.892 8.83092C17.036 8.63386 17.036 8.36634 16.892 8.16945ZM8.49992 12.7968C5.09563 12.7968 2.14715 9.5584 1.27434 8.49972C2.14602 7.44011 5.08832 4.20339 8.49992 4.20339C11.904 4.20339 14.8523 7.44123 15.7255 8.50048C14.8538 9.56006 11.9115 12.7968 8.49992 12.7968Z" fill="black"></path>
                                                        <path d="M8.50035 5.13721C6.64622 5.13721 5.1377 6.64573 5.1377 8.49986C5.1377 10.354 6.64622 11.8625 8.50035 11.8625C10.3545 11.8625 11.863 10.354 11.863 8.49986C11.863 6.64573 10.3545 5.13721 8.50035 5.13721ZM8.50035 10.7416C7.26419 10.7416 6.2586 9.73598 6.2586 8.49986C6.2586 7.26374 7.26423 6.25811 8.50035 6.25811C9.73647 6.25811 10.7421 7.26374 10.7421 8.49986C10.7421 9.73598 9.7365 10.7416 8.50035 10.7416Z" fill="black"></path>
                                                    </svg>
                                                </i>
                                                <span class="tp-product__tooltip tp-product__tooltip-right p-relative">Quick
                                         View</span>
                                            </button>
                                            <button>
                                                <i>
                                                    <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13.2073 16.7012C12.9938 16.7014 12.7835 16.6492 12.5948 16.5493L9.08871 14.7066C9.06154 14.6921 9.03121 14.6845 9.0004 14.6845C8.96959 14.6845 8.93925 14.6921 8.91208 14.7066L5.40659 16.5493C5.18935 16.6637 4.94446 16.7149 4.69962 16.6973C4.45478 16.6796 4.21977 16.5938 4.02117 16.4495C3.82257 16.3052 3.66832 16.1082 3.57587 15.8808C3.48341 15.6534 3.45645 15.4047 3.49802 15.1628L4.1674 11.2596C4.17254 11.229 4.1701 11.1976 4.1603 11.1682C4.15049 11.1388 4.13361 11.1122 4.11115 11.0908L1.27727 8.32503C1.10133 8.15361 0.976905 7.93634 0.918109 7.69783C0.859313 7.45932 0.868493 7.20912 0.944609 6.97556C1.02072 6.742 1.16073 6.53443 1.34877 6.37636C1.53681 6.2183 1.76536 6.11606 2.00852 6.08122L5.92521 5.51254C5.95569 5.5081 5.98462 5.49631 6.00952 5.47818C6.03441 5.46004 6.05451 5.43612 6.06809 5.40847L7.81915 1.85629C7.92761 1.63608 8.09556 1.45064 8.30398 1.32096C8.5124 1.19129 8.75296 1.12256 8.99843 1.12256C9.2439 1.12256 9.48446 1.19129 9.69288 1.32096C9.9013 1.45064 10.0693 1.63608 10.1777 1.85629L11.9299 5.40735C11.9436 5.43491 11.9637 5.45876 11.9886 5.47687C12.0135 5.49499 12.0423 5.50684 12.0728 5.51141L15.9928 6.08066C16.2359 6.11569 16.4643 6.21804 16.6522 6.37613C16.8401 6.53422 16.98 6.74174 17.0561 6.97522C17.1322 7.20869 17.1414 7.4588 17.0827 7.69724C17.024 7.93569 16.8998 8.15296 16.7241 8.32447L13.8874 11.0886C13.865 11.11 13.8482 11.1366 13.8384 11.166C13.8286 11.1954 13.8261 11.2268 13.8311 11.2573L14.5005 15.1605C14.5327 15.3491 14.5234 15.5425 14.4733 15.7271C14.4232 15.9118 14.3334 16.0833 14.2103 16.2297C14.0872 16.3761 13.9336 16.494 13.7603 16.575C13.587 16.656 13.3981 16.6983 13.2068 16.699L13.2073 16.7012ZM9.0004 13.5591C9.21373 13.559 9.42384 13.6112 9.6124 13.711L13.1179 15.5532C13.1489 15.5709 13.1845 15.579 13.2202 15.5765C13.2558 15.574 13.2899 15.561 13.3181 15.5391C13.3476 15.5189 13.3705 15.4905 13.384 15.4574C13.3975 15.4243 13.401 15.388 13.3941 15.3529L12.7241 11.4492C12.6884 11.2391 12.7041 11.0234 12.7699 10.8207C12.8357 10.618 12.9497 10.4343 13.1021 10.2853L15.9388 7.52066C15.9642 7.49586 15.982 7.46448 15.9905 7.43005C15.9989 7.39562 15.9976 7.35952 15.9866 7.32583C15.9756 7.29213 15.9554 7.26218 15.9282 7.23936C15.9011 7.21653 15.8682 7.20174 15.8331 7.19666L11.9136 6.62685C11.7026 6.59629 11.5022 6.51482 11.3297 6.38948C11.1572 6.26413 11.0178 6.09868 10.9236 5.90741L9.16915 2.35579C9.15343 2.324 9.12915 2.29724 9.09903 2.27854C9.06891 2.25983 9.03416 2.24991 8.99871 2.24991C8.96325 2.24991 8.9285 2.25983 8.89839 2.27854C8.86827 2.29724 8.84398 2.324 8.82827 2.35579L7.07721 5.90628C6.98293 6.09762 6.84347 6.26312 6.67088 6.38847C6.49829 6.51382 6.29777 6.59525 6.08665 6.62572L2.16771 7.19666C2.13256 7.20163 2.09951 7.21637 2.07233 7.23921C2.04515 7.26204 2.02492 7.29205 2.01396 7.32582C2.003 7.35958 2.00174 7.39575 2.01033 7.4302C2.01891 7.46464 2.037 7.49599 2.06252 7.52066L4.89865 10.2853C5.05106 10.4343 5.16507 10.618 5.2309 10.8207C5.29674 11.0234 5.31244 11.2391 5.27665 11.4492L4.60671 15.3529C4.60063 15.388 4.60452 15.4241 4.61794 15.457C4.63135 15.49 4.65375 15.5185 4.68259 15.5394C4.71143 15.5603 4.74554 15.5726 4.78106 15.5751C4.81657 15.5775 4.85205 15.5699 4.88346 15.5532L8.3884 13.7104C8.57709 13.611 8.78714 13.5591 9.0004 13.5591Z" fill="black"></path>
                                                    </svg>
                                                </i>
                                                <span class="tp-product__tooltip tp-product__tooltip-right p-relative">Rattings</span>
                                            </button>
                                            <button>
                                                <i>
                                                    <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.86634 10.2L5.33301 11.7333V2.66667C5.33301 2.26667 5.06634 2 4.66634 2C4.26634 2 3.99967 2.26667 3.99967 2.66667V11.7333L2.46634 10.2C2.19967 9.93333 1.79967 9.93333 1.53301 10.2C1.26634 10.4667 1.26634 10.8667 1.53301 11.1333L4.19967 13.8C4.26634 13.8667 4.33301 13.9333 4.39967 13.9333C4.46634 14 4.59967 14 4.66634 14C4.73301 14 4.86634 14 4.93301 13.9333C4.99967 13.9333 5.06634 13.8667 5.13301 13.8L7.79967 11.1333C8.06634 10.8667 8.06634 10.4667 7.79967 10.2C7.53301 9.93333 7.13301 9.93333 6.86634 10.2ZM14.4663 4.86667L11.7997 2.2C11.733 2.13333 11.6663 2.06667 11.5997 2.06667C11.533 2 11.3997 2 11.333 2C11.2663 2 11.133 2 11.0663 2.06667C10.9997 2.06667 10.933 2.13333 10.8663 2.2L8.19967 4.86667C7.93301 5.13333 7.93301 5.53333 8.19967 5.8C8.46634 6.06667 8.86634 6.06667 9.13301 5.8L10.6663 4.26667V13.3333C10.6663 13.7333 10.933 14 11.333 14C11.733 14 11.9997 13.7333 11.9997 13.3333V4.26667L13.533 5.8C13.7997 6.06667 14.1997 6.06667 14.4663 5.8C14.733 5.53333 14.733 5.13333 14.4663 4.86667Z" fill="black"></path>
                                                    </svg>
                                                </i>
                                                <span class="tp-product__tooltip tp-product__tooltip-right p-relative">Add To
                                         Cart</span>
                                            </button>
                                        </div>
                                        <div class="tp-product-item-sale">
                                            <span>Sale</span>
                                        </div>
                                        <div class="tp-product-content text-center">
                                            <h4 class="tp-product-title"><a href="service-details.html" class="text-anim">Plain
                                                    Veneered Flush
                                                    Door</a></h4>
                                            <span>$2362.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tp-product-item p-relative">
                                        <div class="tp-product-thumb-box p-relative mb-25">
                                            <a href="service-details.html">
                                                <img class="image-1" src="assets/images/product/img-4.jpg" alt="">
                                                <img class="image-2" src="assets/images/product/img-6.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="tp-product-icon">
                                            <button>
                                                <i>
                                                    <svg width="17" height="17" viewbox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.892 8.16945C16.7401 7.96169 13.1215 3.08252 8.49992 3.08252C3.87833 3.08252 0.259582 7.96169 0.107877 8.16925C-0.035959 8.36634 -0.035959 8.63366 0.107877 8.83076C0.259582 9.03851 3.87833 13.9177 8.49992 13.9177C13.1215 13.9177 16.7401 9.03847 16.892 8.83092C17.036 8.63386 17.036 8.36634 16.892 8.16945ZM8.49992 12.7968C5.09563 12.7968 2.14715 9.5584 1.27434 8.49972C2.14602 7.44011 5.08832 4.20339 8.49992 4.20339C11.904 4.20339 14.8523 7.44123 15.7255 8.50048C14.8538 9.56006 11.9115 12.7968 8.49992 12.7968Z" fill="black"></path>
                                                        <path d="M8.50035 5.13721C6.64622 5.13721 5.1377 6.64573 5.1377 8.49986C5.1377 10.354 6.64622 11.8625 8.50035 11.8625C10.3545 11.8625 11.863 10.354 11.863 8.49986C11.863 6.64573 10.3545 5.13721 8.50035 5.13721ZM8.50035 10.7416C7.26419 10.7416 6.2586 9.73598 6.2586 8.49986C6.2586 7.26374 7.26423 6.25811 8.50035 6.25811C9.73647 6.25811 10.7421 7.26374 10.7421 8.49986C10.7421 9.73598 9.7365 10.7416 8.50035 10.7416Z" fill="black"></path>
                                                    </svg>
                                                </i>
                                                <span class="tp-product__tooltip tp-product__tooltip-right p-relative">Quick
                                         View</span>
                                            </button>
                                            <button>
                                                <i>
                                                    <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13.2073 16.7012C12.9938 16.7014 12.7835 16.6492 12.5948 16.5493L9.08871 14.7066C9.06154 14.6921 9.03121 14.6845 9.0004 14.6845C8.96959 14.6845 8.93925 14.6921 8.91208 14.7066L5.40659 16.5493C5.18935 16.6637 4.94446 16.7149 4.69962 16.6973C4.45478 16.6796 4.21977 16.5938 4.02117 16.4495C3.82257 16.3052 3.66832 16.1082 3.57587 15.8808C3.48341 15.6534 3.45645 15.4047 3.49802 15.1628L4.1674 11.2596C4.17254 11.229 4.1701 11.1976 4.1603 11.1682C4.15049 11.1388 4.13361 11.1122 4.11115 11.0908L1.27727 8.32503C1.10133 8.15361 0.976905 7.93634 0.918109 7.69783C0.859313 7.45932 0.868493 7.20912 0.944609 6.97556C1.02072 6.742 1.16073 6.53443 1.34877 6.37636C1.53681 6.2183 1.76536 6.11606 2.00852 6.08122L5.92521 5.51254C5.95569 5.5081 5.98462 5.49631 6.00952 5.47818C6.03441 5.46004 6.05451 5.43612 6.06809 5.40847L7.81915 1.85629C7.92761 1.63608 8.09556 1.45064 8.30398 1.32096C8.5124 1.19129 8.75296 1.12256 8.99843 1.12256C9.2439 1.12256 9.48446 1.19129 9.69288 1.32096C9.9013 1.45064 10.0693 1.63608 10.1777 1.85629L11.9299 5.40735C11.9436 5.43491 11.9637 5.45876 11.9886 5.47687C12.0135 5.49499 12.0423 5.50684 12.0728 5.51141L15.9928 6.08066C16.2359 6.11569 16.4643 6.21804 16.6522 6.37613C16.8401 6.53422 16.98 6.74174 17.0561 6.97522C17.1322 7.20869 17.1414 7.4588 17.0827 7.69724C17.024 7.93569 16.8998 8.15296 16.7241 8.32447L13.8874 11.0886C13.865 11.11 13.8482 11.1366 13.8384 11.166C13.8286 11.1954 13.8261 11.2268 13.8311 11.2573L14.5005 15.1605C14.5327 15.3491 14.5234 15.5425 14.4733 15.7271C14.4232 15.9118 14.3334 16.0833 14.2103 16.2297C14.0872 16.3761 13.9336 16.494 13.7603 16.575C13.587 16.656 13.3981 16.6983 13.2068 16.699L13.2073 16.7012ZM9.0004 13.5591C9.21373 13.559 9.42384 13.6112 9.6124 13.711L13.1179 15.5532C13.1489 15.5709 13.1845 15.579 13.2202 15.5765C13.2558 15.574 13.2899 15.561 13.3181 15.5391C13.3476 15.5189 13.3705 15.4905 13.384 15.4574C13.3975 15.4243 13.401 15.388 13.3941 15.3529L12.7241 11.4492C12.6884 11.2391 12.7041 11.0234 12.7699 10.8207C12.8357 10.618 12.9497 10.4343 13.1021 10.2853L15.9388 7.52066C15.9642 7.49586 15.982 7.46448 15.9905 7.43005C15.9989 7.39562 15.9976 7.35952 15.9866 7.32583C15.9756 7.29213 15.9554 7.26218 15.9282 7.23936C15.9011 7.21653 15.8682 7.20174 15.8331 7.19666L11.9136 6.62685C11.7026 6.59629 11.5022 6.51482 11.3297 6.38948C11.1572 6.26413 11.0178 6.09868 10.9236 5.90741L9.16915 2.35579C9.15343 2.324 9.12915 2.29724 9.09903 2.27854C9.06891 2.25983 9.03416 2.24991 8.99871 2.24991C8.96325 2.24991 8.9285 2.25983 8.89839 2.27854C8.86827 2.29724 8.84398 2.324 8.82827 2.35579L7.07721 5.90628C6.98293 6.09762 6.84347 6.26312 6.67088 6.38847C6.49829 6.51382 6.29777 6.59525 6.08665 6.62572L2.16771 7.19666C2.13256 7.20163 2.09951 7.21637 2.07233 7.23921C2.04515 7.26204 2.02492 7.29205 2.01396 7.32582C2.003 7.35958 2.00174 7.39575 2.01033 7.4302C2.01891 7.46464 2.037 7.49599 2.06252 7.52066L4.89865 10.2853C5.05106 10.4343 5.16507 10.618 5.2309 10.8207C5.29674 11.0234 5.31244 11.2391 5.27665 11.4492L4.60671 15.3529C4.60063 15.388 4.60452 15.4241 4.61794 15.457C4.63135 15.49 4.65375 15.5185 4.68259 15.5394C4.71143 15.5603 4.74554 15.5726 4.78106 15.5751C4.81657 15.5775 4.85205 15.5699 4.88346 15.5532L8.3884 13.7104C8.57709 13.611 8.78714 13.5591 9.0004 13.5591Z" fill="black"></path>
                                                    </svg>
                                                </i>
                                                <span class="tp-product__tooltip tp-product__tooltip-right p-relative">Rattings</span>
                                            </button>
                                            <button>
                                                <i>
                                                    <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.86634 10.2L5.33301 11.7333V2.66667C5.33301 2.26667 5.06634 2 4.66634 2C4.26634 2 3.99967 2.26667 3.99967 2.66667V11.7333L2.46634 10.2C2.19967 9.93333 1.79967 9.93333 1.53301 10.2C1.26634 10.4667 1.26634 10.8667 1.53301 11.1333L4.19967 13.8C4.26634 13.8667 4.33301 13.9333 4.39967 13.9333C4.46634 14 4.59967 14 4.66634 14C4.73301 14 4.86634 14 4.93301 13.9333C4.99967 13.9333 5.06634 13.8667 5.13301 13.8L7.79967 11.1333C8.06634 10.8667 8.06634 10.4667 7.79967 10.2C7.53301 9.93333 7.13301 9.93333 6.86634 10.2ZM14.4663 4.86667L11.7997 2.2C11.733 2.13333 11.6663 2.06667 11.5997 2.06667C11.533 2 11.3997 2 11.333 2C11.2663 2 11.133 2 11.0663 2.06667C10.9997 2.06667 10.933 2.13333 10.8663 2.2L8.19967 4.86667C7.93301 5.13333 7.93301 5.53333 8.19967 5.8C8.46634 6.06667 8.86634 6.06667 9.13301 5.8L10.6663 4.26667V13.3333C10.6663 13.7333 10.933 14 11.333 14C11.733 14 11.9997 13.7333 11.9997 13.3333V4.26667L13.533 5.8C13.7997 6.06667 14.1997 6.06667 14.4663 5.8C14.733 5.53333 14.733 5.13333 14.4663 4.86667Z" fill="black"></path>
                                                    </svg>
                                                </i>
                                                <span class="tp-product__tooltip tp-product__tooltip-right p-relative">Add To
                                         Cart</span>
                                            </button>
                                        </div>
                                        <div class="tp-product-content text-center">
                                            <h4 class="tp-product-title"><a href="service-details.html" class="text-anim">Knock-Down Door Frame</a>
                                            </h4>
                                            <span>$2362.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tp-product-item p-relative">
                                        <div class="tp-product-thumb-box p-relative mb-25">
                                            <a href="service-details.html">
                                                <img class="image-1" src="assets/images/product/img-6.jpg" alt="">
                                                <img class="image-2" src="assets/images/product/img-7.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="tp-product-icon">
                                            <button>
                                                <i>
                                                    <svg width="17" height="17" viewbox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.892 8.16945C16.7401 7.96169 13.1215 3.08252 8.49992 3.08252C3.87833 3.08252 0.259582 7.96169 0.107877 8.16925C-0.035959 8.36634 -0.035959 8.63366 0.107877 8.83076C0.259582 9.03851 3.87833 13.9177 8.49992 13.9177C13.1215 13.9177 16.7401 9.03847 16.892 8.83092C17.036 8.63386 17.036 8.36634 16.892 8.16945ZM8.49992 12.7968C5.09563 12.7968 2.14715 9.5584 1.27434 8.49972C2.14602 7.44011 5.08832 4.20339 8.49992 4.20339C11.904 4.20339 14.8523 7.44123 15.7255 8.50048C14.8538 9.56006 11.9115 12.7968 8.49992 12.7968Z" fill="black"></path>
                                                        <path d="M8.50035 5.13721C6.64622 5.13721 5.1377 6.64573 5.1377 8.49986C5.1377 10.354 6.64622 11.8625 8.50035 11.8625C10.3545 11.8625 11.863 10.354 11.863 8.49986C11.863 6.64573 10.3545 5.13721 8.50035 5.13721ZM8.50035 10.7416C7.26419 10.7416 6.2586 9.73598 6.2586 8.49986C6.2586 7.26374 7.26423 6.25811 8.50035 6.25811C9.73647 6.25811 10.7421 7.26374 10.7421 8.49986C10.7421 9.73598 9.7365 10.7416 8.50035 10.7416Z" fill="black"></path>
                                                    </svg>
                                                </i>
                                                <span class="tp-product__tooltip tp-product__tooltip-right p-relative">Quick
                                         View</span>
                                            </button>
                                            <button>
                                                <i>
                                                    <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13.2073 16.7012C12.9938 16.7014 12.7835 16.6492 12.5948 16.5493L9.08871 14.7066C9.06154 14.6921 9.03121 14.6845 9.0004 14.6845C8.96959 14.6845 8.93925 14.6921 8.91208 14.7066L5.40659 16.5493C5.18935 16.6637 4.94446 16.7149 4.69962 16.6973C4.45478 16.6796 4.21977 16.5938 4.02117 16.4495C3.82257 16.3052 3.66832 16.1082 3.57587 15.8808C3.48341 15.6534 3.45645 15.4047 3.49802 15.1628L4.1674 11.2596C4.17254 11.229 4.1701 11.1976 4.1603 11.1682C4.15049 11.1388 4.13361 11.1122 4.11115 11.0908L1.27727 8.32503C1.10133 8.15361 0.976905 7.93634 0.918109 7.69783C0.859313 7.45932 0.868493 7.20912 0.944609 6.97556C1.02072 6.742 1.16073 6.53443 1.34877 6.37636C1.53681 6.2183 1.76536 6.11606 2.00852 6.08122L5.92521 5.51254C5.95569 5.5081 5.98462 5.49631 6.00952 5.47818C6.03441 5.46004 6.05451 5.43612 6.06809 5.40847L7.81915 1.85629C7.92761 1.63608 8.09556 1.45064 8.30398 1.32096C8.5124 1.19129 8.75296 1.12256 8.99843 1.12256C9.2439 1.12256 9.48446 1.19129 9.69288 1.32096C9.9013 1.45064 10.0693 1.63608 10.1777 1.85629L11.9299 5.40735C11.9436 5.43491 11.9637 5.45876 11.9886 5.47687C12.0135 5.49499 12.0423 5.50684 12.0728 5.51141L15.9928 6.08066C16.2359 6.11569 16.4643 6.21804 16.6522 6.37613C16.8401 6.53422 16.98 6.74174 17.0561 6.97522C17.1322 7.20869 17.1414 7.4588 17.0827 7.69724C17.024 7.93569 16.8998 8.15296 16.7241 8.32447L13.8874 11.0886C13.865 11.11 13.8482 11.1366 13.8384 11.166C13.8286 11.1954 13.8261 11.2268 13.8311 11.2573L14.5005 15.1605C14.5327 15.3491 14.5234 15.5425 14.4733 15.7271C14.4232 15.9118 14.3334 16.0833 14.2103 16.2297C14.0872 16.3761 13.9336 16.494 13.7603 16.575C13.587 16.656 13.3981 16.6983 13.2068 16.699L13.2073 16.7012ZM9.0004 13.5591C9.21373 13.559 9.42384 13.6112 9.6124 13.711L13.1179 15.5532C13.1489 15.5709 13.1845 15.579 13.2202 15.5765C13.2558 15.574 13.2899 15.561 13.3181 15.5391C13.3476 15.5189 13.3705 15.4905 13.384 15.4574C13.3975 15.4243 13.401 15.388 13.3941 15.3529L12.7241 11.4492C12.6884 11.2391 12.7041 11.0234 12.7699 10.8207C12.8357 10.618 12.9497 10.4343 13.1021 10.2853L15.9388 7.52066C15.9642 7.49586 15.982 7.46448 15.9905 7.43005C15.9989 7.39562 15.9976 7.35952 15.9866 7.32583C15.9756 7.29213 15.9554 7.26218 15.9282 7.23936C15.9011 7.21653 15.8682 7.20174 15.8331 7.19666L11.9136 6.62685C11.7026 6.59629 11.5022 6.51482 11.3297 6.38948C11.1572 6.26413 11.0178 6.09868 10.9236 5.90741L9.16915 2.35579C9.15343 2.324 9.12915 2.29724 9.09903 2.27854C9.06891 2.25983 9.03416 2.24991 8.99871 2.24991C8.96325 2.24991 8.9285 2.25983 8.89839 2.27854C8.86827 2.29724 8.84398 2.324 8.82827 2.35579L7.07721 5.90628C6.98293 6.09762 6.84347 6.26312 6.67088 6.38847C6.49829 6.51382 6.29777 6.59525 6.08665 6.62572L2.16771 7.19666C2.13256 7.20163 2.09951 7.21637 2.07233 7.23921C2.04515 7.26204 2.02492 7.29205 2.01396 7.32582C2.003 7.35958 2.00174 7.39575 2.01033 7.4302C2.01891 7.46464 2.037 7.49599 2.06252 7.52066L4.89865 10.2853C5.05106 10.4343 5.16507 10.618 5.2309 10.8207C5.29674 11.0234 5.31244 11.2391 5.27665 11.4492L4.60671 15.3529C4.60063 15.388 4.60452 15.4241 4.61794 15.457C4.63135 15.49 4.65375 15.5185 4.68259 15.5394C4.71143 15.5603 4.74554 15.5726 4.78106 15.5751C4.81657 15.5775 4.85205 15.5699 4.88346 15.5532L8.3884 13.7104C8.57709 13.611 8.78714 13.5591 9.0004 13.5591Z" fill="black"></path>
                                                    </svg>
                                                </i>
                                                <span class="tp-product__tooltip tp-product__tooltip-right p-relative">Rattings</span>
                                            </button>
                                            <button>
                                                <i>
                                                    <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.86634 10.2L5.33301 11.7333V2.66667C5.33301 2.26667 5.06634 2 4.66634 2C4.26634 2 3.99967 2.26667 3.99967 2.66667V11.7333L2.46634 10.2C2.19967 9.93333 1.79967 9.93333 1.53301 10.2C1.26634 10.4667 1.26634 10.8667 1.53301 11.1333L4.19967 13.8C4.26634 13.8667 4.33301 13.9333 4.39967 13.9333C4.46634 14 4.59967 14 4.66634 14C4.73301 14 4.86634 14 4.93301 13.9333C4.99967 13.9333 5.06634 13.8667 5.13301 13.8L7.79967 11.1333C8.06634 10.8667 8.06634 10.4667 7.79967 10.2C7.53301 9.93333 7.13301 9.93333 6.86634 10.2ZM14.4663 4.86667L11.7997 2.2C11.733 2.13333 11.6663 2.06667 11.5997 2.06667C11.533 2 11.3997 2 11.333 2C11.2663 2 11.133 2 11.0663 2.06667C10.9997 2.06667 10.933 2.13333 10.8663 2.2L8.19967 4.86667C7.93301 5.13333 7.93301 5.53333 8.19967 5.8C8.46634 6.06667 8.86634 6.06667 9.13301 5.8L10.6663 4.26667V13.3333C10.6663 13.7333 10.933 14 11.333 14C11.733 14 11.9997 13.7333 11.9997 13.3333V4.26667L13.533 5.8C13.7997 6.06667 14.1997 6.06667 14.4663 5.8C14.733 5.53333 14.733 5.13333 14.4663 4.86667Z" fill="black"></path>
                                                    </svg>
                                                </i>
                                                <span class="tp-product__tooltip tp-product__tooltip-right p-relative">Add To
                                         Cart</span>
                                            </button>
                                        </div>
                                        <div class="tp-product-content text-center">
                                            <h4 class="tp-product-title"><a href="service-details.html" class="text-anim"> Wooden
                                                    Double-Leaf
                                                    Door</a></h4>
                                            <span>$2362.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product area end -->
@endsection
