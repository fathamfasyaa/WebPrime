@extends('layouts.app2')

@section('title')

@section('content')

    <div class="container-fluid p-0">
        <div class="row">
            <div class="d-flex align-items-center" style="padding-top: 80px; padding-left:140px;">
                <div id="top" class="text-secondary fs-5 fw-normal">Dashboard</div>
                <div class="text-secondary fs-5 fw-normal">/</div>
                <div class="text-primary fs-5 fw-normal">Portofolio</div>
            </div>

            <!-- Portfolio Section -->
            <div id="poy" class="d-inline-flex flex-wrap align-items-stretch bg-white justify-content-center gap-4 ">
                <!-- Item 1 -->
                @foreach($portfolios as $portfolio)
                <div class="d-flex flex-column align-items-start gap-4 pt-4">
                    <div class="d-flex flex-column gap-4">
                        <div class="d-flex flex-column gap-2">
                            <div class="image-container d-flex justify-content-center align-items-center">
                                <div class="icon-container d-flex" style="height: 300px; width: 450px">
                                    <img src="{{ asset('storage/' . $portfolio->image) }}" alt="" class="porto">
                                </div>
                            </div>
                            <a href="{{ route('portfolio.show', $portfolio->id) }}" class="project-title text-dark text-decoration-none text-wrap" style="width: 450px;">
                                {{ $portfolio->title }}
                            </a>
                        </div>
                    </div>
                    <div class="info-container d-flex flex-column gap-2">
                        <div class="bordered-box d-inline-flex justify-content-center align-items-center" style="width: 300px">
                            <div class="text-primary">{{ $portfolio->k1 }}</div>
                        </div>
                            <div class="d-inline-flex align-items-center gap-2">
                            <div class="tech-details d-flex align-items-center">
                                    <img src="{{ asset('images/dev-to-logo.png') }}" alt="Dev Logo">
                                    <div style="margin: 0px">{{ $portfolio->k2 }}</div>
                                </div>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center align-items-center py-5 gap-2 bg-white">
                <div class="d-flex justify-content-center align-items-center p-2">
                    <img src="images/caret-left.png" alt="" class="icon-size">
                </div>
                <div class="border border-dark p-2 d-flex justify-content-center align-items-center">
                    <div class="text-content">1</div>
                </div>
                <div class="p-2 d-flex justify-content-center align-items-center">
                    <div class="text-content">2</div>
                </div>
                <div class="p-2 d-flex justify-content-center align-items-center">
                    <div class="text-content">...</div>
                </div>
                <div class="p-2 d-flex justify-content-center align-items-center">
                    <div class="text-content">9</div>
                </div>
                <div class="d-flex justify-content-center align-items-center p-2">
                    <img src="images/caret-right.png" alt="" class="">
                </div>
            </div>
        </div>
    </div>
@endsection
