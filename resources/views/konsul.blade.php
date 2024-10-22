@extends('layouts.app2')

@section('title')

@section('content')
    <div class="container-fluid p-0">
        <div id="blog" class="row" style="padding-top: 80px">
            {{--    --}}
            <div id="topweb" class="d-flex align-items-start px-5 pt-5 pb-5">
                <div class="text-secondary fs-5 fw-normal">Dashboard</div>
                <div class="text-secondary fs-5 fw-normal">/</div>
                <div class="text-primary fs-5 fw-normal">Konsultan Teknologi</div>
                <div class="text-secondary fs-5 fw-normal">/</div>
            </div>
            {{--    --}}
            <div id="app-development-section" class="d-flex align-items-start justify-content-start p-4">
                <div id="app-description" class="col-md-5 p-4 bg-white">
                    <p class="text-muted fs-4 font-open-sans">Konsultan Teknologi</p>
                    <h2 class="text-dark font-exo" style="font-size: 45px">Konsultan Teknologi Dengan Tim Ahli untuk Solusi
                        Bisnis Anda.</h2>
                </div>
                <div id="app-details" class="col-md-5 bg-white" style="padding-left: 270px">
                    <p class="text-dark fs-3 font-exo text-wrap" style="width: 800px">Temukan solusi teknologi terbaik
                        bersama tim ahli kami. Dari strategi hingga implementasi, kami menghadirkan teknologi terkini yang
                        dirancang untuk mendukung pertumbuhan dan kesuksesan bisnis Anda, sesuai dengan visi dan tujuan
                        Anda.</p>
                </div>
            </div>
            {{--    --}}
            <div id="xixixi" class="d-flex justify-content-start  bg-dark" style="height: 500px">
                <div id="service-description" class="col-md-5 d-flex flex-column gap-2" style="padding-bottom:80px ">
                    <p class="text-white fs-5 font-open-sans" style="padding-top:80px">Keunggulan Layanan Kami</p>
                    <h2 class="text-white fs-1 font-exo">Layanan Ekstra Untuk Bisnis Anda</h2>
                    <p class="text-white fs-5 font-open-sans">
                        Konsultasi teknologi penting karena membantu bisnis memilih dan memanfaatkan teknologi yang tepat
                        untuk meningkatkan efisiensi, tetap kompetitif, dan mengatasi tantangan dalam dunia digital yang
                        terus berkembang. Dengan bimbingan ahli, bisnis dapat beradaptasi lebih cepat dan mencapai tujuan
                        mereka dengan lebih efektif.
                    </p>
                </div>
                <div id="service-details" class="col-md-5 d-flex flex-column gap-3" style="padding-left: 100px !important">
                    <div class="service-feature gap-2">
                        <h3 class="text-white fs-4 font-exo" style="padding-top: 80px">Analisis Mendalam:</h3>
                        <p class="text-white fs-5 font-open-sans">
                            Kami melakukan analisis mendalam untuk memahami kebutuhan teknologi bisnis Anda.
                        </p>
                    </div>
                    <div class="service-feature">
                        <h3 class="text-white fs-4 font-exo">Solusi Kustom:</h3>
                        <p class="text-white fs-5 font-open-sans">
                            Kami merancang solusi teknologi yang disesuaikan dengan visi dan tujuan bisnis Anda.
                        </p>
                    </div>
                    <div class="service-feature">
                        <h3 class="text-white fs-4 font-exo">
                            Pendekatan Holistik:</h3>
                        <p class="text-white fs-5 font-open-sans">
                            Kami mempertimbangkan setiap aspek bisnis Anda untuk memberikan panduan teknologi yang
                            komprehensif
                        </p>
                    </div>
                </div>
            </div>
            <div id="how-we-work-section" class="d-flex flex-column align-items-start justify-content-start bg-white"
                style="padding-left: 70px; padding-top:50px;">
                <div id="work-title" class="text-muted fs-5 font-open-sans">Bagaimana Kami Bekerja</div>
                <div id="work-description" class="align-self-stretch text-dark fs-1 font-exo">Cara kami Mewujudkan
                    Ekspektasi Anda</div>
            </div>
            {{--    --}}
            <div id="process-section" class="d-flex flex-column align-items-start justify-content-start p-5">
                <div id="process-content" class="d-flex flex-column align-items-start justify-content-start"
                    style="height: 712px;">
                    <div class="d-flex align-items-center mb-4">
                        <div id="consultation" class="process-card">
                            <div class="img-fluid">
                                <img src="{{ asset('/images/dashboard-chats.png') }}" alt="" srcset="">
                            </div>
                            <div class="process-title">Konsultasi Awal:</div>
                            <div id="kata" class="process-description text-wrap" style="width:600px">1.Kami memahami
                                kebutuhan dan tujuan bisnis Anda melalui diskusi mendalam.</div>
                        </div>
                        <div id="design-development" class="process-card" style="padding-left: 300px">
                            <div class="img-fluid"style="padding-top: 20px">
                                <img src="{{ asset('/images/dashboard-chart-donut.png') }}" alt="" srcset="">
                            </div>
                            <div class="process-title"> 2.Analisis Kebutuhan Bisnis</div>
                            <div class="process-description text-wrap" style="width:700px">Kami menganalisis situasi
                                teknologi Anda dan mengidentifikasi solusi yang tepat.</div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div id="testing-launch" class="process-card">
                            <div class="img-fluid" style="padding-top: 10px">
                                <img src="{{ asset('/images/dashboard-strategy.png') }}" alt="" srcset="">
                            </div>
                            <div class="process-title">3.Pengembangan Strategi</div>
                            <div class="process-description text-wrap" style="width: 700px">Kami merancang strategi
                                teknologi yang sesuai, termasuk roadmap dan KPI.</div>
                        </div>
                        <div id="post-launch-support" class="process-card" style="padding-left:200px">
                            <div class="img-fluid">
                                <img src="{{ asset('/images/dashboard-lightbulb-filament.png') }}" alt=""
                                    srcset="">
                            </div>
                            <div class="process-title">4.Implementasi Solusi</div>
                            <div class="process-description text-wrap" style="width: 800px">Kami mengembangkan dan
                                menerapkan solusi, serta memberikan dukungan pasca-implementas</div>
                        </div>
                    </div>
                </div>
            </div>
            {{--    --}}
        </div>
    </div>
@endsection
