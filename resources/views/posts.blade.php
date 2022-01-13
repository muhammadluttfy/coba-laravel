@extends("layouts.main")

@section('content')
    <main id="content" role="main">

        <!-- Hero Section -->
        <div class="container space-top-1">
            <div class="bg-primary rounded"
                style="background: url(/template-assets/svg/illustrations/book.svg) right bottom no-repeat;">
                <div class="w-lg-50">
                    <div class="py-8 px-6">
                        <h1 class="display-4 text-white">Katalog Karir</h1>
                        <p class="text-white mb-0">Belajar secara terarah dari <span class="font-weight-bold">kreator
                                Indonesia</span>
                            secara gratis dan berbayar.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Hero Section -->


        <!-- Courses Section -->
        <div class="container space-2 space-bottom-lg-3">
            <div class="row">

                <div class="col-12">
                    <!-- Filter -->
                    <div class="border-bottom pb-3 mb-5">
                        <div class="row justify-content-md-start align-items-md-center">
                            <div class="col-md-4 mb-3 mb-md-0">
                                <p class="font-size-1 mr-md-auto mb-0"><span class="text-dark font-weight-bold">195
                                        courses</span> to
                                    get started</p>
                            </div>

                            <div class="col-md-8 text-md-right">
                                <!-- Select -->
                                <div class="btn-group">
                                    <button type="button"
                                        class="btn btn-outline-light border text-dark btn-sm dropdown-toggle"
                                        data-toggle="dropdown" aria-expanded="false">
                                        Filter berdasarkan
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Terbaru</a>
                                        <a class="dropdown-item" href="#">terlama</a>
                                        <a class="dropdown-item" href="#">Abjad (A - Z)</a>
                                        <a class="dropdown-item" href="#">Abjad (Z - A)</a>
                                    </div>
                                </div>
                                <!-- End Select -->
                            </div>
                        </div>
                    </div>
                    <!-- End Filter -->

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
                                                    <svg width="14" height="14" viewBox="0 0 18 18"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="currentColor"
                                                            d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z" />
                                                    </svg>
                                                </span>
                                                <span class="navbar-toggler-toggled">
                                                    <svg width="14" height="14" viewBox="0 0 18 18"
                                                        xmlns="http://www.w3.org/2000/svg">
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
                                                <a class="card card-frame h-100" href="/careers/{{ $post->slug }}">
                                                    <img class="card-img-top" src="template-assets/img/480x220/img1.jpg"
                                                        alt="Image Description">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center mb-1">
                                                            <span
                                                                class="d-block text-dark font-weight-bold">{{ $post->title }}</span>
                                                            <img class="ml-2"
                                                                src="template-assets/svg/illustrations/top-vendor.svg"
                                                                alt="Image Description" title="Top Vendor" width="16">
                                                        </div>
                                                        <span
                                                            class="d-block text-body font-size-1">{{ $post->excerpt }}</span>
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

                    <!-- Pagination -->
                    <div class="d-flex justify-content-between align-items-center mt-8">
                        {{-- <small class="d-none d-sm-inline-block text-body">Page 1 out of 6</small> --}}

                        <nav aria-label="Page navigation">
                            <ul class="pagination mb-0">
                                {{ $posts->links() }}
                            </ul>
                        </nav>
                    </div>
                    <!-- End Pagination -->
                </div>
            </div>
        </div>
        <!-- End Courses Section -->

    </main>

@endsection
