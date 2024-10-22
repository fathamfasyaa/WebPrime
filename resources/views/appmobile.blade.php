@extends('layouts.app2')

@section('title', $portfolio->title)

@section('content')
    <div class="container-fluid py-5">
        <div id="bray" class="row">
            <div class="container py-4">
                <!-- Breadcrumb Navigation -->
                <div class="d-flex gap-2 py-2">
                    <div class="text-muted fs-5 font-exo">Dashboard</div>
                    <div class="text-muted fs-5 font-exo">/</div>
                    <div class="text-muted fs-5 font-exo">Portofolio</div>
                    <div class="text-muted fs-5 font-exo">/</div>
                    <div class="text-primary fs-5 font-exo">{{ $portfolio->title }}</div>
                </div>
            </div>

            <div class="container">
                <div class="d-flex flex-column align-items-start gap-3">
                    <div class="d-flex flex-column align-items-start gap-2 w-100">
                        <div class="d-flex flex-column align-items-start gap-2 w-100">
                            <!-- Display Portfolio Image -->
                            <div id="appimg" class="d-flex justify-content-center align-items-center w-100" style="max-height: 1000px; overflow: hidden; height: 700px">
                        <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" class="img-fluid w-100 h-auto">
                    </div>
                            <!-- Portfolio Title -->
                            <div class="text-dark fs-2 font-exo text-capitalize">{{ $portfolio->title }}</div>
                        </div>
                    </div>

                    <!-- Display Key Information -->
                    <div class="d-flex flex-column align-items-start gap-2 w-100" style="height: 63px;">
                        <div class="border border-primary d-flex justify-content-center align-items-center px-2 py-1">
                            <div class="text-primary fs-5 font-exo">{{ $portfolio->k1 }}</div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{ asset('images/dev-to-logo.png') }}" alt="Dev Logo">
                            <div class="text-muted fs-5 font-exo">{{ $portfolio->k2 }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Content -->
        <div class="container py-5 ps-4 fs-5">
            {!! $portfolio->content !!}
        </div>

        <!-- Section 4: Images -->
        <div class="container py-5">
            <div class="d-flex gap-3">
                <!-- First Row of Images -->
                <div id="hideung" class="image-container bg-dark d-flex justify-content-center align-items-center" >
                    <img src="{{ asset('storage/' . $portfolio->image1) }}" alt="Image 1" class="img-fluid " style="height: 400px; width: 800px">
                </div>
                <div id="hideung" class="image-container bg-dark d-flex justify-content-center align-items-center">
                    <img src="{{ asset('storage/' . $portfolio->image2) }}" alt="Image 2" class="img-fluid"  style="height: 400px; width: 800px">
                </div>
            </div>

            <!-- Second Row of Images -->
            <div class="d-flex justify-content-start align-items-start gap-3 mt-4 pb-5">
                <div id="hideung" class="image-container bg-dark d-flex justify-content-center align-items-center">
                    <img src="{{ asset('storage/' . $portfolio->image3) }}" alt="Image 3" class="img-fluid">
                </div>
                <div id="hideung" class="image-container bg-dark d-flex justify-content-center align-items-center">
                    <img src="{{ asset('storage/' . $portfolio->image4) }}" alt="Image 4" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="border-bottom pb-5"></div>

        <!-- Related Portfolios Section -->
        <div class="container" style="padding-top: 48px; padding-bottom: 150px;">
            <div class="row  pt-5">
                <div id="" class="col-12 text-start portfolio-header pb-5 pt-5">
                    <h1>Portofolio Lainnya</h1>
                </div>
            </div>
            <div class="row g-4">
                @foreach($relatedPortfolios as $relatedPortfolio)
                    <div class="col-md-6 d-flex flex-column gap-3">
                        <div class="d-flex flex-column gap-4">
                            <div id="hideung" class="image-container bg-dark d-flex justify-content-center align-items-center">
                                <img src="{{ asset('storage/' . $relatedPortfolio->image) }}" alt="{{ $relatedPortfolio->title }}" class="img-fluid">
                            </div>
                            <div class="portfolio-title text-wrap" style="width: 700px">
                                {{ $relatedPortfolio->title }}
                            </div>
                        </div>
                        <div class="gap-2">
                            <div class="tech-support" style="width: 180px">
                                {{ $relatedPortfolio->k1 }}
                            </div>
                            <div class="tech-details d-flex align-items-center pt-3">
                                <img src="{{ asset('images/dev-to-logo.png') }}" alt="Dev Logo">
                                <div style="margin: 0px">{{ $relatedPortfolio->k2 }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
