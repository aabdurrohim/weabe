@extends('layouts.main')

@section('content')
    <div class="d-flex justify-content-center" style="padding-top: 100px; padding-bottom: 50px;">
        <div class="w-100 text-center text-md-start" style="max-width: 700px;">
            <h1 class="fw-bold mb-3">Fikri Abdurrohim Ibnu Prabowo</h1>
            <h5 class="text-muted mb-4">
                <i class="bi bi-geo-alt-fill me-2"></i> Surakarta, Indonesia
            </h5>
            <p class="fs-5 mb-4">
                Hi! 🖐🏻 You can call me Abe, and this is my personal website. This site will showcase some of my
                experiences in
                the technology field, especially programming & IT Infrastructure.
            </p>
            <a href="{{ url('/project') }}" class="btn btn-secondary">
                <i class="bi bi-briefcase-fill me-2"></i> View My Projects
            </a>
        </div>
    </div>
@endsection
