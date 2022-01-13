@extends('layouts.main')

@section('content')

    <!-- Search Section -->
    <div class="bg-light">
        <div class="container py-3">
            <div class="row justify-content-md-between align-items-md-center">
                <div class="col-md-5 mb-3 mb-md-0">
                    <!-- Breadcrumb -->
                    <nav class="d-inline-block rounded" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-no-gutter font-size-1 mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Karir</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
                        </ol>
                    </nav>
                    <!-- End Breadcrumb -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Search Section -->

    <!-- App Description Section -->
    <div class="container space-top-2 space-bottom-lg-2">
        <!-- Content -->
        <div class="row">
            <div class="col-md-4 col-lg-3 mb-9 mb-md-0">
                <!-- App Info -->
                <div class="mr-lg-2">
                    <div class="mb-7">
                        <div class="card-frame rounded text-center mx-auto mb-3">
                            <img class="img-fluid" src="/template-assets/img/160x160/img23.png" alt="Image Description"
                                width="130">
                        </div>

                        {{-- <a class="btn btn-sm btn-block btn-primary transition-3d-hover" href="#">Install Now</a> --}}
                    </div>


                    <div class="d-none d-md-block mb-7">
                        <h2 class="h4">Most Used Tools</h2>
                        <p style="margin-top: -5px">Rekomendasi aplikasi yang biasa digunakan</p>

                        <!-- Card -->
                        @forelse ($post->tools as $tool)
                            <div class="col-12 p-0 mt-1 mb-3">
                                <div class="card card-frame h-100">
                                    <a class="card-body" href="app-description.html">
                                        <div class="media">
                                            <div class="avatar avatar-xs mt-1 mr-3">
                                                <img class="avatar-img" src="/template-assets/img/160x160/img5.jpg"
                                                    alt="Image Description">
                                            </div>
                                            <div class="media-body">
                                                <div class="d-flex align-items-center">
                                                    <span
                                                        class="d-block text-dark font-weight-bold">{{ $tool->name }}</span>
                                                    <img class="ml-2"
                                                        src="/template-assets/svg/illustrations/top-vendor.svg"
                                                        alt="Image Description" title="Top Vendor" width="16">
                                                </div>
                                                <small class="d-block text-body">{{ $tool->lisence }}</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @empty
                            <p class="text-danger">Tidak ada rekomendasi tool</p>
                        @endforelse
                        <!-- End Card -->
                    </div>


                </div>
                <!-- End App Info -->
            </div>

            <div class="col-md-8 col-lg-9 column-divider-md">
                <div class="ml-lg-2">
                    <div class="mb-5">
                        <h2>{{ $post->title }} <img class="ml-1"
                                src="/template-assets/svg/illustrations/top-vendor.svg" alt="Image Description"
                                title="Top Vendor" width="20"></h2>
                    </div>

                    <!-- Nav Classic -->
                    <ul class="nav nav-classic nav-rounded nav-justified border" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold active" id="pills-one-example1-tab" data-toggle="pill"
                                href="#pills-one-example1" role="tab" aria-controls="pills-one-example1"
                                aria-selected="true">
                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                    <figure class="d-none d-md-block w-100 max-w-5rem mr-3">
                                        <img class="img-fluid" src="/template-assets/svg/icons/icon-24.svg" alt="SVG">
                                    </figure>
                                    Description
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" id="pills-three-example1-tab" data-toggle="pill"
                                href="#pills-three-example1" role="tab" aria-controls="pills-three-example1"
                                aria-selected="false">
                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                    <figure class="d-none d-md-block w-100 max-w-5rem mr-3">
                                        <img class="img-fluid" src="/template-assets/svg/icons/icon-22.svg" alt="SVG">
                                    </figure>
                                    Cources
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- End Nav Classic -->

                    <!-- Tab Content -->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade pt-6 show active" id="pills-one-example1" role="tabpanel"
                            aria-labelledby="pills-one-example1-tab">

                            <div class="description-content">
                                <p class="decrtiption-heading">Overview</p>
                                {!! $post->body !!}
                            </div>

                            <div class="description-content">
                                <p class="decrtiption-heading">Required Skills</p>

                                <ul class="text-body pl-4 mb-5">
                                    <li>Create new Google Docs, Slides, and Sheets files</li>
                                    <li>Import an existing file from Google Drive into a channel or direct message</li>
                                    <li>Search directly within Google Drive files shared within Slack</li>
                                </ul>
                            </div>

                            <div class="description-content">
                                <p class="decrtiption-heading">Average Salary</p>
                                <h1>Rp <span class="number">{{ $post->salary }}JT</span> <span
                                        class="year">/tahun</span>
                                    <p class="salary">Source : {{ $post->salary_source }}.</p>
                                </h1>
                            </div>


                        </div>


                        <div class="tab-pane fade pt-6" id="pills-three-example1" role="tabpanel"
                            aria-labelledby="pills-three-example1-tab">

                            <div class="description-content">
                                <h4 class="decrtiption-heading">Rekomendasi Belajar</h4>
                                <p class="mb-3">Rekomendasi Belajar dari Kreator
                                    Indonesia</p>
                            </div>

                            <div class="row mb-5">
                                @forelse ($post->courses as $course)
                                    <article class="col-md-12 col-lg-6 mb-5">
                                        <!-- Article -->
                                        <div class="card border h-100">
                                            <div class="card-img-top position-relative">
                                                <img class="card-img-top"
                                                    src="/template-assets/svg/components/graphics-1.svg"
                                                    alt="Image Description">

                                                <div class="position-absolute top-0 left-0 mt-3 ml-3">
                                                    <small
                                                        class="btn btn-xs btn-success btn-pill text-uppercase shadow-soft mb-3">{{ $post->category->name }}</small>
                                                </div>

                                                <div class="position-absolute bottom-0 left-0 mb-3 ml-4">
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <ul class="list-inline mt-n1 mb-0 mr-2">
                                                            <li class="list-inline-item mx-0"><img
                                                                    src="/template-assets/svg/illustrations/star.svg"
                                                                    alt="Review rating" width="14"></li>
                                                            <li class="list-inline-item mx-0"><img
                                                                    src="/template-assets/svg/illustrations/star.svg"
                                                                    alt="Review rating" width="14"></li>
                                                            <li class="list-inline-item mx-0"><img
                                                                    src="/template-assets/svg/illustrations/star.svg"
                                                                    alt="Review rating" width="14"></li>
                                                            <li class="list-inline-item mx-0"><img
                                                                    src="/template-assets/svg/illustrations/star.svg"
                                                                    alt="Review rating" width="14"></li>
                                                            <li class="list-inline-item mx-0"><img
                                                                    src="/template-assets/svg/illustrations/star.svg"
                                                                    alt="Review rating" width="14"></li>
                                                        </ul>
                                                        <span class="d-inline-block">
                                                            <small class="font-weight-bold text-white mr-1">4.91</small>
                                                            <small class="text-white-70">(558K+ Subscribers)</small>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <small
                                                    class="d-block small font-weight-bold text-cap mb-2">{{ $course->basic_learning }}</small>

                                                <div class="mb-3">
                                                    <h3>
                                                        <a class="text-inherit" href="course-description.html">
                                                            {{ $course->name }}
                                                        </a>
                                                    </h3>
                                                </div>

                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-group">
                                                        <a class="avatar avatar-xs avatar-circle" data-toggle="tooltip"
                                                            data-placement="top" title="Nataly Gaga" href="#">
                                                            <img class="avatar-img"
                                                                src="/template-assets/img/100x100/img1.jpg"
                                                                alt="Image Description">
                                                        </a>
                                                    </div>
                                                    <div class="d-flex align-items-center ml-auto">
                                                        <div class="small text-muted">
                                                            <i
                                                                class="fa fa-book-reader d-block d-sm-inline-block mb-1 mb-sm-0 mr-1"></i>
                                                            {{ $course->author }}
                                                        </div>
                                                        {{-- <small class="text-muted mx-2">|</small> --}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-footer border-0 pt-0">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="mr-2">
                                                        {{-- <small
                                                            class="d-block text-muted text-lh-sm"><del>Berbayar</del></small> --}}
                                                        <small class="d-block text-muted text-lh-sm">Kelas ini</small>
                                                        <span
                                                            class="d-block h5 text-lh-sm mb-0">{{ $course->lisence }}</span>

                                                    </div>
                                                    <a class="btn btn-sm btn-primary transition-3d-hover"
                                                        href="course-description.html">Belajar Sekarang</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Article -->
                                    </article>
                                @empty
                                    <article class="col-md-6 mb-5">
                                        <p class="text-danger ">Belum ada rekomendasi belajar</p>
                                    </article>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <!-- End Tab Content -->
                </div>
            </div>
        </div>
        <!-- End Content -->
    </div>
    <!-- End App Description Section -->


@endsection
