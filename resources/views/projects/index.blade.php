@extends('layouts.main')

@section('content')
    <div class="container mb-5 ">
        <div class="row mb-5">
            <div class="col-12">
                <h1 class="fw-medium text-center text-md-start">Project List</h1>
                <hr class="my-4 opacity-25">
            </div>
        </div>

        <div class="row g-4">
            @foreach ($projects as $project)
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100 transition-hover" style="transition: all 0.3s ease;">
                        <div class="overflow-hidden position-relative" style="height: 220px;">
                            <img src="{{ asset($project->imageUrl) }}" class="card-img-top object-fit-cover h-100 w-100"
                                alt="{{ $project->title }}">
                            <div class="position-absolute bottom-0 end-0 p-2">
                                <span class="badge bg-white text-dark">
                                    {{ \Carbon\Carbon::parse($project->date)->format('F j, Y') }}
                                </span>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="card-title fw-medium">{{ $project->title }}</h5>
                            <p class="card-text text-muted">{{ Str::limit($project->excerpt, 100) }}</p>
                        </div>
                        <div class="card-footer bg-transparent border-0 pb-4 px-4">
                            <a href="{{ route('projects.show', $project->slug) }}"
                                class="btn btn-outline-dark w-100 rounded-pill">View Details</a>
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
