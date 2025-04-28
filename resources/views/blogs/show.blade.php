@extends('layouts.main')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('blogs.index') }}"
                                class="text-decoration-none text-muted">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $blog->title }}</li>
                    </ol>
                </nav>

                <div class="mb-4">
                    <span class="badge bg-light text-dark px-3 py-2 rounded-pill mb-3">{{ $blog->category }}</span>
                    <h1 class="fw-medium mb-3">{{ $blog->title }}</h1>
                    <p class="text-muted">
                        <i class="far fa-calendar-alt me-2"></i>
                        {{ \Carbon\Carbon::parse($blog->date)->format('F j, Y') }}
                    </p>
                </div>

                <div class="card border-0 shadow-sm mb-5">
                    <div class="card-body p-0">
                        <img src="{{ asset($blog->imageUrl) }}" alt="{{ $blog->title }}" class="img-fluid w-100"
                            style="max-height: 500px; object-fit: cover;">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="content-section">
                            <p class="lead mb-4 fs-6">{{ $blog->excerpt }}</p>

                            <div class="my-5 fs-5">
                                <div class="blog-content">
                                    {!! nl2br(e($blog->content1)) !!}
                                </div>

                                @if ($blog->content2)
                                    <div class="additional-info pt-4 border-top border-light">
                                        <div class="blog-content">
                                            {!! nl2br(e($blog->content2)) !!}
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <div class="mt-5 pt-4 border-top border-light">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ route('blogs.index') }}" class="btn btn-outline-dark rounded-pill px-4">
                                        <i class="fas fa-arrow-left me-2"></i>Back to Articles
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .blog-content {
            line-height: 1.8;
            color: #444;
        }

        .blog-content p {
            margin-bottom: 1.5rem;
        }

        .lead {
            font-weight: 300;
            font-size: 1.25rem;
        }

        .btn-outline-dark:hover {
            background-color: #212529;
            color: white;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            color: #dee2e6;
        }

        .badge {
            font-weight: 400;
        }

        .share-buttons a:hover {
            opacity: 0.7;
        }
    </style>
@endsection
