<x-layout>
    <div class="text-center py-5 page-bg">
        <!-- Animated Heading -->
        <h1 class="fw-bold display-4 animate__animated animate__fadeInDown text-primary-dark">
            Mabuhay!
        </h1>
        <p class="lead text-muted animate__animated animate__fadeIn animate__delay-1s">
            Select a member to view their page
        </p>

        <!-- Members Section -->
        <div class="row justify-content-center mt-5">
            <!-- Example member card -->
            <div class="col-md-3 mb-4 animate__animated animate__zoomIn animate__delay-2s">
                <a href="{{ url('/dixie') }}" class="text-decoration-none" target="_blank">
                    <div class="card shadow-lg border-0 rounded-4 h-100 hover-card member-card">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-dark">Dixie</h5>
                            <p class="card-text text-secondary">View Biography</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="row justify-content-center mt-5">

            <!-- Example member card -->
            <div class="col-md-3 mb-4 animate__animated animate__zoomIn animate__delay-2s">
                <a href="{{ url('/pariñas') }}" class="text-decoration-none" target="_blank">
                    <div class="card shadow-lg border-0 rounded-4 h-100 hover-card member-card">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-dark">Marlyn</h5>
                            <p class="card-text text-secondary">View Biography</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="row justify-content-center mt-5">
            <!-- Example member card -->
            <div class="col-md-3 mb-4 animate__animated animate__zoomIn animate__delay-2s">
                <a href="{{ url('/crystal') }}" class="text-decoration-none" target="_blank">
                    <div class="card shadow-lg border-0 rounded-4 h-100 hover-card member-card">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-dark">Crystal Joy</h5>
                            <p class="card-text text-secondary">View Biography</p>
                        </div>
                    </div>
                </a>
            </div>
                

            <!-- Add more members here in same format -->
        </div>
    </div>

    <!-- Add Animate.css for animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Custom styles -->
    <style>
        /* Background with soft gradient */
        .page-bg {
            background: linear-gradient(135deg, #FFFBDE, #90D1CA);
            min-height: 100vh;
        }

        /* Heading color */
        .text-primary-dark {
            color: #096B68;
        }

        /* Card styling */
        .member-card {
            background-color: #90D1CA;
            color: #096B68;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
        }

        /* Hover effect */
        .hover-card:hover {
            transform: translateY(-10px) scale(1.05);
            background-color: #129990;
            color: #FFFBDE;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        .hover-card:hover .card-title,
        .hover-card:hover .card-text {
            color: #FFFBDE !important;
        }
    </style>
</x-layout>
