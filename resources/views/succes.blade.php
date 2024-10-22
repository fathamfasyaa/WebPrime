@extends('layouts.app2')

@section('title', $blog->title)

@section('content')
    <div id="pangbadagna" class="container-fluid py-5">
        <div id="blog" class="row">
            <div id="berad" class="container">
                <!-- Breadcrumb Navigation -->
                <div class="d-flex gap-2 py-4">
                    <div class="text-muted fs-5 font-exo">Dashboard</div>
                    <div class="text-muted fs-5 font-exo">/</div>
                    <div class="text-muted fs-5 font-exo">Blog</div>
                    <div class="text-muted fs-5 font-exo">/</div>
                    <div class="text-primary fs-5 font-exo">{{ $blog->title }}</div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="d-flex flex-column align-items-start gap-3">
                <div class="d-flex flex-column align-items-start gap-2 w-100">
                    <div id="appimg" class="d-flex justify-content-center align-items-center w-100" style="max-height: 1000px; overflow: hidden; height: 700px">
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid w-100 h-auto">
                    </div>
                    <div class="d-flex justify-content-end w-100 mt-3">
                        <div class="date-badge">{{ $blog->date }}</div>
                    </div>
                    <div id="mengapa" class="text-dark fs-2 font-exo text-capitalize mt-4">
                        {{ $blog->title }}
                    </div>
                    <div id="p1" class="text-secondary custom-paragraph mt-3 text-wrap" style="width:1290px;">
                        {!!$blog->content!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="nubawah" class="container-fluid border-top border-2 border-secondary p-0" style="background-color: #EBEBEB">
        <div id="lainnya" class="text-black custom-heading" style="padding-bottom: 20px">Blog Lainnya</div>
        <div class="container">
            <div class="row">
                @foreach($relatedBlogs as $relatedBlog)
                <!-- Card -->
                <div class="col-md-6">
                    <div class="card">
                        <!-- Image -->
                        <div class="card-img-top bg-dark d-flex justify-content-center align-items-center"
                            style="height: 400px;width:595px; margin:20px; margin-top:30px">
                            <img src="{{ asset('storage/' . $relatedBlog->image) }}" alt="{{ $relatedBlog->title }}" class="img-fluid" style="max-height: 100%; max-width: 100%; object-fit: cover;">
                        </div>

                        <!-- Date Badge -->
                        <div class="d-flex justify-content-end" style="padding-top:20px; padding-right:20px;">
                            <div id="datebayo" class="date-badge">{{ $relatedBlog->date }}</div>
                        </div>

                        <!-- Card Body -->
                        <div class="card-body">
                            <!-- Card Title -->
                            <div id="why" class="text-dark font-exo text-capitalize" style="font-size: 1.5rem;">
                                {{ $relatedBlog->title }}
                            </div>

                            <!-- Card Text -->
                            <div id="wow" class="text-secondary custom-paragraph" style="font-size: 1rem;">
                                {{ Str::limit(strip_tags($relatedBlog->content),304) }}
                            </div>

                            <!-- Blog Link -->
                            <div class="text-primary px-3 py-4" style="font-size: 18px;">
                                <img src="{{ asset('images/arrow-elbow-down-left copy.png') }}" alt="Arrow"
                                    class="arrow-icon">
                                <a href="{{ route('blog.show', $relatedBlog->id) }}">Lihat Blog</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="d-flex justify-content-center align-items-center py-5" style="padding-left: 0px; padding-right:  0px"
                    style="background-color: #EBEBEB; width:900px">
                    <div class="d-flex justify-content-center align-items-center p-2">
                        <img src="{{ asset('images/caret-left.png') }}" alt="" class="icon-size">
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
                        <img src="{{ asset('images/caret-right.png') }}" alt="" class="icon-size">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
