@extends('layouts.app2')

@section('title')

@section('content')

    <style>
        footer {
            display: none; /* Menyembunyikan footer hanya untuk halaman ini */
        }
    </style>

<div class="container-fluid" style="padding-top: 80px; ">
    <div class="row py-4" style="background-color:#EBEBEB ">
        <div class="col-md-4">
            <h2 class="section-title mb-4">Layanan</h2>
            <div class="mb-5">
                <h3 class="service-title">Website</h3>
                <p class="service-description">Dari landing page hingga e-commerce, kami<br> pastikan setiap detail memenuhi ekspektasi dan<br> memberikan pengalaman pengguna yang<br> optimal.</p>
                <a href="#" class="learn-more d-flex align-items-center">
                    <img src="images/arrow-elbow-down-left copy.png" alt="" class="me-2">
                    Pelajari Lebih Lanjut
                </a>
            </div>
            <div class="mb-5">
                <h3 class="service-title">Mobile App Android/iOS</h3>
                <p class="service-description">Setiap aplikasi dibuat dengan performa tinggi,<br> memastikan kemudahan akses dan engagement<br> yang maksimal.</p>
                <a href="#" class="learn-more d-flex align-items-center">
                    <img src="images/arrow-elbow-down-left copy.png" alt="" class="me-2">
                    Pelajari Lebih Lanjut
                </a>
            </div>
            <div>
                <h3 class="service-title">Dukungan Teknologi</h3>
                <p class="service-description">Dukungan teknologi yang handal untuk<br> memastikan semua sistem dan infrastruktur<br> digital Anda berjalan dengan lancar. Mulai dari<br> troubleshooting hingga maintenance, tim kami<br> siap membantu Anda kapan saja.</p>
                <a href="#" class="learn-more d-flex align-items-center">
                    <img src="images/arrow-elbow-down-left copy.png" alt="" class="me-2">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <h2 class="section-title mb-4">Team Subscriptions</h2>
            <div class="mb-5">
                <h3 class="subscription-title">Support Essential</h3>
                <p class="subscription-description">Tenaga ahli IT untuk maintenance,<br> troubleshooting, dan update software rutin.<br> Cocok bagi bisnis dengan kebutuhan teknologi<br> sederhana.</p>
                <a href="#" class="learn-more d-flex align-items-center">
                    <img src="images/arrow-elbow-down-left copy.png" alt="" class="me-2">
                    Pelajari Lebih Lanjut
                </a>
            </div>
            <div class="mb-5">
                <h3 class="subscription-title">Team Growth</h3>
                <p class="subscription-description">Tim developer front-end, back-end, dan QA siap<br> tangani pengembangan aplikasi, peningkatan<br> sistem, dan pengujian. Ideal untuk bisnis<br> berkembang.</p>
                <a href="#" class="learn-more d-flex align-items-center">
                    <img src="images/arrow-elbow-down-left copy.png" alt="" class="me-2">
                    Pelajari Lebih Lanjut
                </a>
            </div>
            <div>
                <h3 class="subscription-title">Full-Scale Squad</h3>
                <p class="subscription-description">Tim ahli: project manager, developer full-stack,<br> UI/UX designer, devops engineer, dan data<br> analyst. Ideal untuk pengembangan produk<br> startup.</p>
                <a href="#" class="learn-more d-flex align-items-center">
                    <img src="images/arrow-elbow-down-left copy.png" alt="" class="me-2">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <h2 class="section-title mb-4">Blog</h2>
            @foreach($blogs->take(2) as $blog)
                <div class="blog-item mb-4">
                    <div class="blog-image" style="width: 550px;">
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid" style="width: 100%; height: 200px; object-fit: cover;">
                    </div>
                    <h3 class="blog-title" style="margin: 0px; height: 100px; align-items:center; padding-top: 25px; padding-left: 20px">{{ $blog->title }}</h3>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
