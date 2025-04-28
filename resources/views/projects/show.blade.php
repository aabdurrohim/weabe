@extends('layouts.main')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('projects.index') }}"
                                class="text-decoration-none text-muted">Projects</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $project->title }}</li>

                    </ol>
                    <span class="badge bg-light text-dark px-3 py-2 rounded-pill mb-3 fs-6">{{ $project->category }}</span>

                </nav>

                <div class="mb-5 text-center">
                    <h1 class="fw-light mb-3">{{ $project->title }}</h1>
                    <p class="text-muted">
                        <i class="far fa-calendar-alt me-2"></i>
                        {{ \Carbon\Carbon::parse($project->date)->format('F j, Y') }}
                    </p>
                </div>

                <div class="card border-0 shadow-sm mb-5">
                    <div class="card-body p-0">
                        <div class="position-relative">
                            <img src="{{ $project->imageUrl }}" alt="{{ $project->title }}" class="img-fluid w-100"
                                style="max-height: 500px; object-fit: cover;">
                            <div class="position-absolute bottom-0 start-0 w-100 p-3"
                                style="background: linear-gradient(0deg, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0) 100%);">
                                <a href="{{ $project->url }}" class="btn btn-light rounded-pill px-4" target="_blank">
                                    <i class="fas fa-external-link-alt me-2"></i>Visit Project
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="content-section">
                            <p class="lead mb-4">{{ $project->excerpt }}</p>

                            <div class="my-5">
                                <p>{{ $project->content1 }}</p>

                                <hr class="my-5 opacity-10">

                                <p>{{ $project->content2 }}</p>
                            </div>

                            <div class="mt-5 d-flex justify-content-between align-items-center">
                                <a href="{{ route('projects.index') }}" class="btn btn-outline-dark rounded-pill px-4">
                                    <i class="fas fa-arrow-left me-2"></i>Back to Projects
                                </a>
                                <a href="{{ $project->url }}" class="btn btn-dark rounded-pill px-4" target="_blank">
                                    Visit Project<i class="fas fa-external-link-alt ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .content-section p {
            line-height: 1.8;
            color: #444;
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
    </style>
@endsection
