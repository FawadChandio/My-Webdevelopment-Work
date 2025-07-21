<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - SoftMAT</title>

    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Google Fonts (Roboto) -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body>

    <!-- Header Section -->
    @include('Layout.header')

    <!-- Hero Section -->
    <section class="hero text-white d-flex align-items-center justify-content-center" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('/images/hero-bg.jpg'); 
                    background-size: cover; 
                    height: 100vh;">
        <div class="text-center animate__animated animate__fadeInDown">
            <h1 class="display-4 font-weight-bold">Welcome to SoftMAT</h1>
            <p class="lead">Your go-to solution for all digital needs.</p>
            <a href="{{ route('services') }}" class="btn btn-purple btn-lg shadow-lg">Explore Our Services</a>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services py-5 bg-light">
        <div class="container">
            <h2 class="text-center font-weight-bold mb-4 animate__animated animate__fadeInUp">Our Services</h2>
            <p class="text-center mb-5">We offer a variety of services to meet your needs:</p>
            <div class="row">
                @foreach([
                ['icon' => 'fa-paint-brush', 'title' => 'Graphic Design'],
                ['icon' => 'fa-laptop-code', 'title' => 'Web Development'],
                ['icon' => 'fa-search', 'title' => 'SEO Services'],
                ['icon' => 'fa-mobile-alt', 'title' => 'Mobile App Development']
                ] as $service)
                <div class="col-md-3 text-center">
                    <div class="service-card p-4 bg-white shadow-sm animate__animated animate__fadeInUp animate__delay-{{ $loop->iteration }}s">
                        <i class="fas {{ $service['icon'] }} fa-3x mb-3 text-purple"></i>
                        <h4 class="font-weight-bold">{{ $service['title'] }}</h4>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section class="video-section py-5 text-center">
        <div class="container">
            <h2 class="mb-4 animate__animated animate__fadeInUp">Discover SoftMAT</h2>
            <p class="animate__animated animate__fadeInUp animate__delay-1s">Learn more about our services and what we offer.</p>
            <div class="justify-center col-lg-12">
                <video autoplay muted loop controls class="mt-3 shadow-lg animate__animated animate__zoomIn" style="width: 105%; max-width: 800%; border-radius: 8px; justify-center">
                    <source src="{{ asset('images/web.mp4') }}" type="video/mp4">
            </div>
            Your browser does not support the video tag.
            </video>
        </div>
    </section>

    <!-- About Section -->
    <section class="about py-5 bg-light">
        <div class="container text-center">
            <h1 class="font-weight-bold mb-4 animate__animated animate__fadeInLeft">About Us</h1>
            <h2 class="font-weight-normal mb-3 animate__animated animate__fadeInLeft animate__delay-1s">Who We Are</h2>
            <p class="animate__animated animate__fadeInLeft animate__delay-2s">
                At SoftMAT, we are committed to delivering quality services to our clients. Our team of experts is dedicated to providing innovative solutions tailored to your needs.
            </p>
        </div>
    </section>

    <!-- Footer Section -->
    @include('Layout.footer')

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Font Awesome JS for icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>
