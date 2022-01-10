@extends('layouts.main')

@section('content')

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <!-- Hero Section -->
        <div class="container space-2">
            <div class="row justify-content-lg-between align-items-lg-center">
                <div class="col-sm-10 col-lg-5 mb-7 mb-lg-0">
                    <img class="img-fluid" src="/template-assets/svg/illustrations/reading.svg" alt="Image Description">
                </div>

                <div class="col-lg-6">
                    <div class="mb-5">
                        <h1 class="display-4 mb-3">
                            Unlock your
                            <br>
                            <span class="text-primary font-weight-bold">
                                <span class="js-text-animation"></span>
                            </span>
                        </h1>
                        <p class="lead">With our platform, you can quantify your skills, grow in your role
                            and stay relevant on
                            critical topics.</p>
                    </div>

                    <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
                        <a class="btn btn-primary transition-3d-hover mb-2" href="../pages/login.html">Start a Free
                            Trial</a>

                        <div class="mx-2"></div>

                        <!-- Fancybox -->
                        <a class="js-fancybox video-player video-player-btn media align-items-center text-dark mb-2"
                            href="javascript:;" data-hs-fancybox-options='{
                                                                                       "src": "//youtube.com/0qisGSwZym4",
                                                                                       "caption": "Front - Responsive Website Template",
                                                                                       "speed": 700,
                                                                                       "buttons": ["fullScreen", "close"],
                                                                                       "youtube": {
                                                                                         "autoplay": 1
                                                                                       }
                                                                                     }'>
                            <span class="video-player-icon shadow-soft mr-3">
                                <i class="fa fa-play"></i>
                            </span>
                            <span class="media-body">
                                How it works
                            </span>
                        </a>
                        <!-- End Fancybox -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Hero Section -->

        <!-- Popular Categories Section -->
        <div class="space-bottom-2 space-bottom-lg-3"
            style="background: url(/template-assets/svg/components/abstract-shapes-9.svg) center no-repeat;">
            <div class="position-relative">
                <div class="container space-2">
                    <!-- Title -->
                    <div class="row align-items-md-center mb-7">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <h2>Cari karirmu berdasarkan kategori yang kami sediakan</h2>
                        </div>
                        <div class="col-md-6 text-md-right">
                            <a class="font-weight-bold" href="#">See all Programs <i
                                    class="fa fa-angle-right fa-sm ml-1"></i></a>
                        </div>
                    </div>
                    <!-- End Title -->

                    <div class="js-slick-carousel slick slick-equal-height slick-gutters-3 slick-center-mode-right slick-center-mode-right-offset"
                        data-hs-slick-carousel-options='{
                                                                                       "prevArrow": "<span class=\"fa fa-arrow-left slick-arrow slick-arrow-primary-white slick-arrow-left slick-arrow-centered-y shadow-soft rounded-circle ml-sm-n2\"></span>",
                                                                                       "nextArrow": "<span class=\"fa fa-arrow-right slick-arrow slick-arrow-primary-white slick-arrow-right slick-arrow-centered-y shadow-soft rounded-circle mr-sm-2 mr-xl-4\"></span>",
                                                                                       "slidesToShow": 5,
                                                                                       "infinite": true,
                                                                                       "responsive": [{
                                                                                         "breakpoint": 1200,
                                                                                           "settings": {
                                                                                             "slidesToShow": 4
                                                                                           }
                                                                                         }, {
                                                                                         "breakpoint": 992,
                                                                                           "settings": {
                                                                                             "slidesToShow": 3
                                                                                           }
                                                                                         }, {
                                                                                         "breakpoint": 768,
                                                                                         "settings": {
                                                                                           "slidesToShow": 2
                                                                                         }
                                                                                         }, {
                                                                                         "breakpoint": 554,
                                                                                         "settings": {
                                                                                           "slidesToShow": 1
                                                                                         }
                                                                                       }]
                                                                                     }'>
                        <!-- Article -->
                        @foreach ($categories as $category)
                            <article class="js-slide pt-2">
                                <a class="card bg-img-hero w-100 min-h-270rem transition-3d-hover"
                                    href="/posts?category={{ $category->slug }}"
                                    style="background-image: url(/template-assets/img/400x500/img14.jpg);">
                                    <div class="card-body">
                                        <span
                                            class="d-block small text-white-70 font-weight-bold text-cap mb-2">Category</span>
                                        <h3 class="text-white">{{ $category->name }}</h3>
                                    </div>
                                    <div class="card-footer border-0 bg-transparent pt-0">
                                        <span class="text-white font-size-1 font-weight-bold">Read now</span>
                                    </div>
                                </a>
                            </article>
                        @endforeach
                        <!-- End Article -->

                    </div>
                </div>

                <div class="w-100 w-md-65 bg-light position-absolute top-0 right-0 bottom-0 rounded-left z-index-n1">
                </div>
            </div>
        </div>
        <!-- End Popular Categories Section -->

        <!-- Apps Section -->
        <div class="container space-bottom-2 space-bottom-lg-3">
            <div class="row">
                <div class="col-lg-3 mb-5 mb-lg-0">
                    <div class="mr-lg-3">
                        <!-- Navbar -->
                        <div class="navbar-expand-lg navbar-expand-lg-collapse-block navbar-light">
                            <!-- Responsive Toggle Button -->
                            <button type="button" class="navbar-toggler btn btn-block border py-3"
                                aria-label="Toggle navigation" aria-expanded="false" aria-controls="sidebarNav"
                                data-toggle="collapse" data-target="#sidebarNav">
                                <span class="d-flex justify-content-between align-items-center">
                                    <span class="h5 mb-0">View all categories</span>
                                    <span class="navbar-toggler-default">
                                        <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="currentColor"
                                                d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z" />
                                        </svg>
                                    </span>
                                    <span class="navbar-toggler-toggled">
                                        <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="currentColor"
                                                d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
                                        </svg>
                                    </span>
                                </span>
                            </button>
                            <!-- End Responsive Toggle Button -->

                            <div id="sidebarNav" class="collapse navbar-collapse">
                                <div class="p-2 p-lg-0">
                                    <div class="mt-3 mt-lg-0">
                                        <h2 class="h4">Explore</h2>

                                        <!-- Nav Link -->
                                        <a class="dropdown-item d-flex justify-content-between align-items-center px-0"
                                            href="#">
                                            All
                                            <span class="badge border badge-pill">30+</span>
                                        </a>
                                        <a class="dropdown-item d-flex justify-content-between align-items-center px-0"
                                            href="#">
                                            Top rated
                                        </a>
                                        <a class="dropdown-item d-flex justify-content-between align-items-center px-0"
                                            href="#">
                                            Featured
                                        </a>
                                        <a class="dropdown-item d-flex justify-content-between align-items-center px-0"
                                            href="#">
                                            Daily tools
                                        </a>
                                        <a class="dropdown-item d-flex justify-content-between align-items-center px-0"
                                            href="#">
                                            New
                                            <span class="badge border badge-pill">18</span>
                                        </a>
                                        <a class="dropdown-item d-flex justify-content-between align-items-center px-0"
                                            href="#">
                                            Channels
                                        </a>
                                        <!-- End Nav Link -->
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- End Navbar -->
                    </div>
                </div>

                <div class="col-lg-9 column-divider-lg">
                    <div class="ml-lg-2">
                        <div class="row mx-n2 mb-7">

                            @foreach ($posts as $post)
                                <div class="col-sm-6 col-md-4 px-2 mb-3">
                                    <!-- Card -->
                                    <a class="card card-frame h-100" href="app-description.html">
                                        <img class="card-img-top" src="template-assets/img/480x220/img1.jpg"
                                            alt="Image Description">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-1">
                                                <span class="d-block text-dark font-weight-bold">{{ $post->title }}</span>
                                                <img class="ml-2"
                                                    src="template-assets/svg/illustrations/top-vendor.svg"
                                                    alt="Image Description" title="Top Vendor" width="16">
                                            </div>
                                            <span class="d-block text-body font-size-1">Deliver call activity and voicemails
                                                straight to your inbox</span>
                                        </div>
                                    </a>
                                    <!-- End Card -->
                                </div>
                            @endforeach

                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- End Apps Section -->

        <!-- CTA Section -->
        <div class="container space-bottom-2">
            <div class="text-center py-6"
                style="background: url(/template-assets/svg/components/abstract-shapes-19.svg) center no-repeat;">
                <h2>Find the right learning path for you</h2>
                <p>Answer a few questions and match your goals to our programs.</p>
                <span class="d-block mt-5">
                    <a class="btn btn-primary transition-3d-hover" href="#">Explore by Category</a>
                </span>
            </div>
        </div>
        <!-- End CTA Section -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

@endsection
