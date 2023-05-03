@extends('layouts.app')
@section('content')
<div class="crm">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-breadcrumb">
                    <div class="breadcrumb-main">                     
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="products_page product_page--grid mb-30">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="columns-1 col-lg-4 col-md-5 col-sm-8 order-md-0 order-1">
                    <div class="widget">
                        <div class="widget-header-title px-20 py-15 border-bottom">
                            <h6 class="d-flex align-content-center fw-500">
                                <span data-feather="sliders"></span> Filters
                            </h6>
                        </div>
                        <div class="category_sidebar">                          
                            <!-- Start: Aside -->
                            <aside class="product-sidebar-widget mb-30">
                                <!-- Title -->
                                <div class="widget_title mb-20">
                                    <h6>Category</h6>
                                </div>
                                <!-- Title -->
                                <!-- Body -->
                                <div class="card border-0">
                                    <div class="product-category">
                                        <ul>
                                            <li>
                                                <div class="w-100">
                                                    <span class="fs-14 color-gray">End of Life Care<span class="item-numbers">4</span></span>
                                                </div>
                                            </li>
                                          
                                        </ul>
                                    </div>
                                </div>
                                <!-- Body -->
                            </aside>
                            <!-- End: Aside -->
                           
                            <!-- Start: Aside -->
                            <aside class="product-sidebar-widget mb-30">
                                <!-- Title -->  
                                <div class="widget_title mb-20">
                                    <h6>Ratings</h6>
                                </div>
                                <!-- Title -->
                                <!-- Body -->
                                <div class="card border-0">
                                    <div class="product-ratings">
                                        <ul>
                                            <li>
                                                <div class="checkbox-theme-default custom-checkbox ">
                                                    <input class="checkbox" type="checkbox" id="rating-1">
                                                    <label for="rating-1">

                                                        <span class="stars-rating d-flex align-items-center">
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="checkbox-text">
                                                                and up
                                                                <span class="item-numbers">42</span>
                                                            </span>
                                                        </span>

                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox-theme-default custom-checkbox ">
                                                    <input class="checkbox" type="checkbox" id="rating-3">
                                                    <label for="rating-3">

                                                        <span class="stars-rating d-flex align-items-center">
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="star-icon las la-star inactive"></span>
                                                            <span class="checkbox-text">
                                                                and up
                                                                <span class="item-numbers">54</span>
                                                            </span>
                                                        </span>

                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox-theme-default custom-checkbox ">
                                                    <input class="checkbox" type="checkbox" id="rating-4">
                                                    <label for="rating-4">

                                                        <span class="stars-rating d-flex align-items-center">
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="star-icon las la-star inactive"></span>
                                                            <span class="star-icon las la-star inactive"></span>
                                                            <span class="checkbox-text">
                                                                and up
                                                                <span class="item-numbers">78</span>
                                                            </span>
                                                        </span>

                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox-theme-default custom-checkbox ">
                                                    <input class="checkbox" type="checkbox" id="rating-5">
                                                    <label for="rating-5">

                                                        <span class="stars-rating d-flex align-items-center">
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="star-icon las la-star inactive"></span>
                                                            <span class="star-icon las la-star inactive"></span>
                                                            <span class="star-icon las la-star inactive"></span>
                                                            <span class="checkbox-text">
                                                                and up
                                                                <span class="item-numbers">42</span>
                                                            </span>
                                                        </span>

                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox-theme-default custom-checkbox ">
                                                    <input class="checkbox" type="checkbox" id="rating-6">
                                                    <label for="rating-6">

                                                        <span class="stars-rating d-flex align-items-center">
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="star-icon las la-star inactive"></span>
                                                            <span class="star-icon las la-star inactive"></span>
                                                            <span class="star-icon las la-star inactive"></span>
                                                            <span class="star-icon las la-star inactive"></span>
                                                            <span class="checkbox-text">
                                                                and up
                                                                <span class="item-numbers">35</span>
                                                            </span>
                                                        </span>

                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Body -->
                            </aside>
                            <!-- End: Aside -->
                        </div>
                    </div><!-- End: .widget -->
                </div><!-- End: .columns-1 -->
                <div class="columns-2 col-lg-8 col-md-7 col-sm-8 order-md-1 order-0">
                    <!-- Start: Top Bar -->
                    <div class="shop_products_top_filter">
                        <div class="project-top-wrapper d-flex flex-wrap align-items-center">
                            <div class="project-top-left d-flex flex-wrap align-items-center">
                                <div class="project-search shop-search  global-shadow ">
                                    <form action="/" class="d-flex align-items-center user-member__form">
                                        <span data-feather="search"></span>
                                        <input class="form-control mr-sm-2 border-0 box-shadow-none" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                                <span class="project-result-showing fs-14 color-gray ml-xl-25 mr-xl-0 text-center mt-lg-0 mt-20">Showing
                                    <span>1–8</span> of <span>86</span>
                                    results</span>
                            </div>
                            <div class="project-top-right d-flex flex-wrap align-items-center">
                                <div class="project-category flex-wrap d-flex align-items-center">
                                    <p class="fs-14 color-gray text-capitalize">sort by:</p>
                                    <div class="project-tap b-light">
                                        <ul class="nav px-1 " id="ap-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="ap-overview-tab" data-toggle="pill" href="#ap-overview" role="tab" aria-controls="ap-overview" aria-selected="true">top rated</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="timeline-tab" data-toggle="pill" href="#timeline" role="tab" aria-controls="timeline" aria-selected="false">popular</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="activity-tab" data-toggle="pill" href="#activity" role="tab" aria-controls="activity" aria-selected="false">Newest</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="draft-tab" data-toggle="pill" href="#draft" role="tab" aria-controls="draft" aria-selected="false">price</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="project-icon-selected content-center mt-lg-0 mt-25">
                                    <div class="listing-social-link pb-lg-0 pb-xs-2">
                                        <div class="icon-list-social d-flex">
                                            <a class="icon-list-social__link rounded-circle icon-list-social__style justify-content-center active ml-xl-20 mr-20" href="#">
                                                <span data-feather="grid"></span></a>
                                            <a class="icon-list-social__link rounded-circle icon-list-social__style justify-content-center  " href="product-list.html">
                                                <span data-feather="list"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End: Top Bar -->
                    <div class="tab-content mt-25" id="ap-tabContent">
                        <div class="tab-pane fade show active" id="ap-overview" role="tabpanel" aria-labelledby="ap-overview-tab">
                            <!-- Start: Shop Item -->
                            <div class="row product-page-list justify-content-center">                                
                                <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                                    <div class="card product product--grid">
                                        <div class="h-100">
                                            <div class="product-item">
                                                <div class="product-item__image">
                                                    <span class="like-icon">
                                                        <button type="button" class="content-center">
                                                            <i class="lar la-heart icon"></i>
                                                        </button>
                                                    </span>
                                                    <a href="#"><img class="card-img-top img-fluid" src="img/glass-cup.png" alt="digital-chair"></a>
                                                </div>
                                                <div class="card-body px-20 pb-25 pt-20">
                                                    <div class="product-item__body text-capitalize">
                                                        <a href="product-details.html">
                                                            <h6 class="card-title">Mary Wambui</h6>
                                                        </a>
                                                        <div class="d-flex align-items-center mb-10 flex-wrap">
                                                            <span class="product-desc-price">Ksh. 4500.00</span>
                                                            <span class="product-price">Ksh. 6000.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="stars-rating d-flex align-items-center flex-wrap">
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="star-icon las la-star-half-alt active"></span>
                                                            <span class="stars-rating__point">4.9</span>
                                                            <span class="stars-rating__review">
                                                                <span>778</span> Reviews</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__button d-flex mt-20 flex-wrap">
                                                        <button class="btn btn-default btn-squared btn-outline-light px-15 "><span data-feather="calendar"></span>
                                                           book now
                                                        </button>
                                                        <button class="btn btn-primary btn-default btn-squared border-0 ">Open
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                                    <div class="card product product--grid">
                                        <div class="h-100">
                                            <div class="product-item">
                                                <div class="product-item__image">
                                                    <span class="like-icon">
                                                        <button type="button" class="content-center">
                                                            <i class="lar la-heart icon"></i>
                                                        </button>
                                                    </span>
                                                    <a href="#"><img class="card-img-top img-fluid" src="img/glass-cup.png" alt="digital-chair"></a>
                                                </div>
                                                <div class="card-body px-20 pb-25 pt-20">
                                                    <div class="product-item__body text-capitalize">
                                                        <a href="product-details.html">
                                                            <h6 class="card-title">Mary Wambui</h6>
                                                        </a>
                                                        <div class="d-flex align-items-center mb-10 flex-wrap">
                                                            <span class="product-desc-price">Ksh. 4500.00</span>
                                                            <span class="product-price">Ksh. 6000.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="stars-rating d-flex align-items-center flex-wrap">
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="star-icon las la-star-half-alt active"></span>
                                                            <span class="stars-rating__point">4.9</span>
                                                            <span class="stars-rating__review">
                                                                <span>778</span> Reviews</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__button d-flex mt-20 flex-wrap">
                                                        <button class="btn btn-default btn-squared btn-outline-light px-15 "><span data-feather="calendar"></span>
                                                           book now
                                                        </button>
                                                        <button class="btn btn-primary btn-default btn-squared border-0 ">Open
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                                    <div class="card product product--grid">
                                        <div class="h-100">
                                            <div class="product-item">
                                                <div class="product-item__image">
                                                    <span class="like-icon">
                                                        <button type="button" class="content-center">
                                                            <i class="lar la-heart icon"></i>
                                                        </button>
                                                    </span>
                                                    <a href="#"><img class="card-img-top img-fluid" src="img/glass-cup.png" alt="digital-chair"></a>
                                                </div>
                                                <div class="card-body px-20 pb-25 pt-20">
                                                    <div class="product-item__body text-capitalize">
                                                        <a href="product-details.html">
                                                            <h6 class="card-title">Mary Wambui</h6>
                                                        </a>
                                                        <div class="d-flex align-items-center mb-10 flex-wrap">
                                                            <span class="product-desc-price">Ksh. 4500.00</span>
                                                            <span class="product-price">Ksh. 6000.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="stars-rating d-flex align-items-center flex-wrap">
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="star-icon las la-star-half-alt active"></span>
                                                            <span class="stars-rating__point">4.9</span>
                                                            <span class="stars-rating__review">
                                                                <span>778</span> Reviews</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__button d-flex mt-20 flex-wrap">
                                                        <button class="btn btn-default btn-squared btn-outline-light px-15 "><span data-feather="calendar"></span>
                                                           book now
                                                        </button>
                                                        <button class="btn btn-primary btn-default btn-squared border-0 ">Open
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                                    <div class="card product product--grid">
                                        <div class="h-100">
                                            <div class="product-item">
                                                <div class="product-item__image">
                                                    <span class="like-icon">
                                                        <button type="button" class="content-center">
                                                            <i class="lar la-heart icon"></i>
                                                        </button>
                                                    </span>
                                                    <a href="#"><img class="card-img-top img-fluid" src="img/glass-cup.png" alt="digital-chair"></a>
                                                </div>
                                                <div class="card-body px-20 pb-25 pt-20">
                                                    <div class="product-item__body text-capitalize">
                                                        <a href="product-details.html">
                                                            <h6 class="card-title">Mary Wambui</h6>
                                                        </a>
                                                        <div class="d-flex align-items-center mb-10 flex-wrap">
                                                            <span class="product-desc-price">Ksh. 4500.00</span>
                                                            <span class="product-price">Ksh. 6000.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__footer">
                                                        <div class="stars-rating d-flex align-items-center flex-wrap">
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="star-icon las la-star active"></span>
                                                            <span class="star-icon las la-star-half-alt active"></span>
                                                            <span class="stars-rating__point">4.9</span>
                                                            <span class="stars-rating__review">
                                                                <span>778</span> Reviews</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-item__button d-flex mt-20 flex-wrap">
                                                        <button class="btn btn-default btn-squared btn-outline-light px-15 "><span data-feather="calendar"></span>
                                                           book now
                                                        </button>
                                                        <button class="btn btn-primary btn-default btn-squared border-0 ">Open
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- End: Shop Item -->
                        </div>
                    </div>
                </div><!-- End: .columns-2 -->
            </div>
        </div>
    </div><!-- End: .products -->

</div>
@endsection
