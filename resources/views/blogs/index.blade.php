@extends('layouts.main')

@section('content')
    <div class="container mb-5">
        <div class="row mb-5">
            <div class="col-12">
                <h1 class="fw-medium text-center text-md-start">Blog Articles</h1>
                <hr class="my-4 opacity-25">
            </div>
        </div>

        <div class="row g-4">
            @foreach ($blogs as $blog)
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100 transition-hover" style="transition: all 0.3s ease;">
                        <div class="overflow-hidden position-relative" style="height: 220px;">
                            <img src="{{ asset($blog->imageUrl) }}" class="card-img-top object-fit-cover h-100 w-100"
                                alt="{{ $blog->title }}">
                            <div class="position-absolute top-0 end-0 p-2">
                                <span class="badge bg-white text-dark small">
                                    {{ $blog->category }}
                                </span>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <small
                                class="text-muted d-block mb-2">{{ \Carbon\Carbon::parse($blog->date)->format('F j, Y') }}</small>
                            <h5 class="card-title fw-medium">{{ $blog->title }}</h5>
                            <p class="card-text text-muted">{{ Str::limit($blog->excerpt, 100) }}</p>
                        </div>
                        <div class="card-footer bg-transparent border-0 pb-4 px-4">
                            <a href="{{ route('blogs.show', $blog->slug) }}"
                                class="btn btn-outline-dark w-100 rounded-pill">Read Article</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <style>
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05) !important;
        }

        .transition-hover:hover .btn-outline-dark {
            background-color: #212529;
            color: white;
        }

        .object-fit-cover {
            object-fit: cover;
        }
    </style>
@endsection
