@extends('layouts.app2')

@section('title')

@section('content')

<div class="container-fluid p-4 d-flex flex-column">
    <div class="d-flex align-items-center mb-4 ps-4">
        <div class="breadcrumb" style="padding-top: 80px">
            <span class="breadcrumb-item text-muted">Dashboard</span>
            <span class="breadcrumb-item text-primary" style="padding-top: 5px">Blog</span>
        </div>
    </div>
    <div id="blogimg" class="row">
        <!-- Column 1 -->
        @php $count = 0; @endphp
        <div class="d-flex">
            @foreach($blogs as $blog)
            @if($count < 3) <div class="col-md-4 d-flex flex-column p-3">
                <div id="content-update" class="bg-dark d-flex justify-content-center align-items-center" style="height: 380px;">
                    <img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid" alt="Placeholder Image">
                </div>

                <div class="mt-3 d-flex justify-content-end align-items-center">
                    <div class="badge badge-outline-dark px-3 py-2">{{ $blog->date }}</div>
                </div>
                <div class="mt-3">
                    <h4 class="text-dark font-exo fs-2">{{ $blog->title }}</h4>
                    <p class="text-secondary truncated-text">{{ Str::limit(strip_tags($blog->content),304) }}</p> <!-- Tambahkan kelas truncated-text -->
                </div>
                <div class="read-more d-flex align-items-center">
                    <img src="{{ asset('images/arrow-elbow-down-left copy.png') }}" alt="" srcset="">
                    <span id="blok" class="read-more-text">
                        <a href="{{ route('blog.show', $blog->id) }}">Lihat Blog</a>
                    </span>
                </div>
        </div>
        @php $count++; @endphp
        @else
        @break
        @endif
        @endforeach
    </div>
    <div class="pagination-container">
        <div class="arrow-container">
            <img src="{{ asset('images/caret-left.png') }}" alt="">
        </div>
        <div class="page-number border-box">1</div>
        <div class="page-number">2</div>
        <div class="page-number">...</div>
        <div class="page-number">9</div>
        <div class="arrow-container">
            <img src="{{ asset('images/caret-right.png') }}" alt="">

        </div>
    </div>
</div>
</div>
@endsection
