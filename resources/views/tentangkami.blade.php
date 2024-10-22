@extends('layouts.app2')

@section('title')

@section('content')

<div class="container-fluid p-0">
    <div id="blog" class="row" style="padding-top: 80px">
        <div id="breadcrumb" class="d-inline-flex align-items-center gap-2" style="padding-bottom: 20px; margin-left:20px;">
            <div id="dashboard" class="breadcrumb-item">Dashboard</div>
            <div id="title" class="breadcrumb-item">
                <span class="text-primary">Tentang Kami</span>
                <span id="separator" class="separator-gray">/</span>
            </div>
        </div>
        <div id="background" class="container-fluid pt-4" style="background-color: #2C50CB;">

            <div id="KONTOLAJAIB">
                <img src="{{ asset('images/image.png') }}" alt="Image" id="img-fluid-custom" class="img-fluid">
                <h6 id="about" class="text-light">Tentang The Prime Technology</h6>
                <h2 id="membangun" class="fw-semibold text-light" style="">Membangun Negri Dengan Teknologi</h2>
            </div>
        </div>

        <div id="visimisi" class="container-fluid ">
            <div class="row">
                <div id="bg" class="col-md-6 px">
                    <h6 class="text-muted fs-5" style="padding-left:80px;">Visi & Misi Teknologi Adhikarya Prima</h6>
                    <h2 class="text-primary fw-semibold fs-1" style="padding-left:80px">The Prime Technology</h2>
                </div>
                <div id="bg" class="col-md-6 px-5">
                    <div>
                        <h4 class="fw-bolder fs-3">Visi Kami:</h4>
                        <p class="text-muted text-wrap fs-5" style="width:720px">Menjadi mitra terpercaya dalam
                            transformasi digital, memberikan solusi yang inovatif dan berdampak nyata pada setiap bisnis
                            yang kami layani.</p>
                    </div>
                    <div>
                        <h4 class="fw-bolder fs-3">Misi Kami:</h4>
                        <p class="text-muted text-wrap fs-5" style="width:750px">Kami berkomitmen untuk menyediakan
                            layanan teknologi yang unggul, berfokus pada kualitas, kecepatan, dan kepuasan klien. Dengan
                            pendekatan yang berpusat pada pengguna, kami menciptakan produk digital yang sesuai dengan
                            kebutuhan dan ekspektasi bisnis.</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="company-values" class="container-fluid text-white ">
            <div class="row">
                <div id="company-description" class="col-lg-6 px-4 d-flex flex-column gap-3">
                    <h4 id="values-title">Nilai-Nilai Perusahaan</h4>
                    <h1 id="main-description">Dasar dari setiap komitmen dari kami untuk hasil terbaik.</h1>
                </div>
                <div id="company-items" class="col-lg-6 d-flex flex-column gap-4 text-wrap" style="width: 830px">
                    <div id="value-item-1">
                        <h3>Inovasi:</h3>
                        <p>Kami selalu mencari cara baru untuk meningkatkan solusi yang kami tawarkan, beradaptasi
                            dengan tren dan teknologi terkini.</p>
                    </div>
                    <div id="value-item-2">
                        <h3>Kolaborasi:</h3>
                        <p>Kami percaya bahwa kolaborasi adalah kunci sukses dalam setiap proyek. Kerja sama dengan
                            klien dan di antara tim kami adalah fondasi dari hasil yang luar biasa.</p>
                    </div>
                    <div id="value-item-3">
                        <h3>Keunggulan:</h3>
                        <p>Kami berusaha untuk selalu memberikan hasil terbaik bagi klien kami, dengan standar kualitas
                            yang tinggi di setiap tahap.</p>
                    </div>
                    <div id="value-item-4">
                        <h3>Integritas:</h3>
                        <p>Kami menjunjung tinggi transparansi dan kejujuran dalam setiap aspek pekerjaan kami,
                            membangun kepercayaan yang kuat dengan klien.</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- orang dibalik layar  --}}
        <div id="team-section" class="container-fluid p-5">
            <div id="team-header" class="row mb-5">
                <div class="col-12">
                    <p id="team-subheading" class="text-muted mb-2 ">Tim Kami</p>
                    <h2 id="team-title" class="section-title">Orang dibalik layar The Prime</h2>
                </div>
            </div>

            <div id="team-members-row-1" class="row mb-4 text-wrap" style="display: flex; flex-wrap: wrap;">
                @foreach($partners as $index => $partner)
                <div class="col-md-4 mb-4" style="flex-basis: 33%; display: flex; align-items: center; justify-content: center;">
                    <div class="team-member">
                        <div class="member-image mb-3" style="height: 400px; width: 100%; overflow: hidden;">
                            <img src="{{ asset('storage/' . $partner->image) }}" alt="Member" class="img-fluid" style="height: 100%; width: 100%; object-fit: cover;">
                        </div>
                        <h3 class="member-name">{{ $partner->title }}</h3>
                        <span class="member-role">{{ $partner->author }}</span>
                        <p class="member-description">
                            {!! $partner->content !!}
                        </p>
                    </div>
                </div>
                @if (($index + 1) % 3 == 0 && $index != 0)
                <div class="w-100"></div>
                @endif
                @endforeach
            </div>
        </div>
        <div class="container-fluid py-5 custom-content">
            <div id="slider" class="row align-items-center" style="flex-direction: row;flex-wrap: nowrap;">
                <div class="col-12 col-md-7">
                    <p id="fontslider" class="text-muted custom- text-wrap fs-4" style="width:900px">Terus berkembang
                        bersama kami, melampaui ekspektasi dan mencapai tujuan.</p>
                </div>
                <div class="col-12 col-md-9">
                    <div class="slider-container">
                        <div class="slider-content">
                            @foreach($mitras as $index => $mitra)
                            <div class="slide-item">
                                <img id="imgsplider_{{ $loop->index }}" class="img-fluid slide-img pe-2" src="{{ asset('storage/' . $mitra->image) }}" style="width: 200px" alt="">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="prime-section" class="d-flex justify-content-center align-items-center bg-dark text-white ">
        <div id="prime-content" class="flex-grow-1 p-3 d-flex flex-column justify-content-start align-items-start gap-3">
            <h2 id="theprime" class="fs-4 ">The Prime Technology</h2>
            <h1 class="fs-1 text-wrap" style="width: 800px">Siap untuk Mengubah Ide Anda Menjadi Realitas Digital?
            </h1>
            <p class="fs-6 fw-light text-wrap" style="width: 750px">Jangan tunggu lagi. Mari bicarakan bagaimana kami
                bisa membantu Anda mewujudkan website, aplikasi, atau solusi teknologi yang sesuai dengan kebutuhan
                Anda. Hubungi kami sekarang dan mulailah perjalanan digital Anda dengan langkah yang tepat.</p>
            <div id="meeting-button" class="d-inline-flex">
                <a href="#" class="btn btn-dark border-white">Buat janji meeting</a>
            </div>
        </div>
        <div id="prime-image" class="flex-grow-1">
            <div id="bgg" class=""></div>
        </div>
    </div>
    <div id="testimonial-section" class="d-flex justify-content-start align-items-start p-5">
        <div id="testimonial-title" class="flex-grow-1 p-0 bg-white d-flex flex-column justify-content-start align-items-start gap-2">
            <p class="text-muted fs-3 fw-normal">Testimonial</p>
            <h2 class="fs-1 fw-semibold">Apa Kata Mereka Tentang Kami</h2>
        </div>
        <div id="testimonial-content" class="flex-grow-1 p-3 bg-white d-flex flex-column justify-content-start align-items-start gap-3">
            <p class="fs-2 fw-semibold text-wrap" style="width: 900px">"Kami memerlukan pengembangan aplikasi yang
                kompleks dalam waktu singkat.
                <span class="text-primary">The Prime</span> tidak hanya memenuhi tenggat waktu, tetapi juga memberikan
                solusi yang inovatif dan fungsional."
            </p>
            <p class="text-muted fs-4 ">Sari Lestari, CEO di Tech Innovate</p>
            <div class="d-inline-flex gap-2 align-items-center">
                <img src="images/arrow-elbow-down-left copy.png" alt="arrow icon" class="img-fluid-custom" style="">
                <a href="#" class="text-primary fs-5">Lihat semua</a>
            </div>
        </div>
    </div>
</div>

<script>
    let currentIndex = 0;

function slideToNext() {
    const sliderContent = document.querySelector('.slider-content');
    const totalItems = document.querySelectorAll('.slide-item').length;
    currentIndex = (currentIndex + 1) % totalItems;
    const offset = -currentIndex * 10; // Asumsi setiap item lebarnya 100%
    sliderContent.style.transform = `translateX(${offset}%)`;
}

// Panggil slideToNext setiap 2 detik
setInterval(slideToNext, 2000);
</script>

@endsection
