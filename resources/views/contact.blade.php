@extends('layouts.main')

@section('content')
    <div class="d-flex justify-content-center" style="padding-top: 50px; padding-bottom: 50px;">
        <div class="w-100 text-center text-md-start" style="max-width: 700px;">
            <div class="mb-5 text-center">
                <h1 class="display-5 fw-bold text-gray-800 mb-3">Contact Me</h1>
                <p class="text-gray-600 max-w-lg mx-auto fs-5">
                    Feel free to reach me out via email or social media if you have any questions or would like to
                    collaborate.
                </p>
            </div>

            <div class="bg-white rounded-lg p-4 p-md-5 shadow-sm">
                <h2 class="fs-3 fw-medium text-gray-800 mb-4">Contact Information</h2>

                <!-- Bikin 2 kolom Email + Location -->
                <div class="row g-4 mb-4">
                    <div class="col-12 col-md-6">
                        <div class="d-flex align-items-start gap-3">
                            <i class="bi bi-envelope-fill fs-4 text-primary mt-1"></i>
                            <div>
                                <p class="fs-5 text-secondary mb-1">Email</p>
                                <p class="text-gray-800 mb-0 email-link">abdurrohim.i.p@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="d-flex align-items-start gap-3">
                            <i class="bi bi-geo-alt-fill fs-4 text-primary mt-1"></i>
                            <div>
                                <p class="fs-5 text-secondary mb-1">Location</p>
                                <a href="https://maps.app.goo.gl/rFHYJ6q2KHHhnE3H7" target="_blank"
                                    class="text-gray-800 location-link text-decoration-none">
                                    Surakarta, Indonesia
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-3">
                    <p class="medium text-secondary mb-3">Social Media</p>
                    <div class="d-flex gap-3">
                        <a href="https://www.instagram.com/abdvrrohim/" target="_blank" class="social-icon instagram">
                            <i class="bi bi-instagram fs-4"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/fikriabdurrohim/" target="_blank" class="social-icon linkedin">
                            <i class="bi bi-linkedin fs-4"></i>
                        </a>
                        <a href="https://github.com/aabdurrohim" target="_blank" class="social-icon github">
                            <i class="bi bi-github fs-4"></i>
                        </a>
                        <a href="https://www.youtube.com/@bDocs" target="_blank" class="social-icon youtube">
                            <i class="bi bi-youtube fs-4"></i>
                        </a>
                    </div>
                </div>

            </div>

            <div class="mt-5 text-center small text-secondary">
                <p>This website is built by me using Laravel & Bootstrap, and some of the data inside is dummy data for
                    demonstration purposes only.</p>
            </div>

        </div>
    </div>

    <style>
        .text-gray-800 {
            color: #2d3748;
        }

        .text-gray-600 {
            color: #4a5568;
        }

        .text-secondary {
            color: #718096 !important;
        }

        .social-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            background-color: #fff;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.08);
            color: #4a5568;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            transform: translateY(-3px);
        }

        .social-icon.instagram:hover {
            color: #E1306C;
            box-shadow: 0 5px 15px rgba(225, 48, 108, 0.3);
        }

        .social-icon.linkedin:hover {
            color: #0077B5;
            box-shadow: 0 5px 15px rgba(0, 119, 181, 0.3);
        }

        .social-icon.github:hover {
            color: #333;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .social-icon.youtube:hover {
            color: #FF0000;
            box-shadow: 0 5px 15px rgba(255, 0, 0, 0.3);
        }

        .email-link:hover {
            color: #3182ce;
            cursor: pointer;
        }

        .location-link:hover {
            color: #3182ce;
        }
    </style>
@endsection
