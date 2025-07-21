<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - SoftMAT</title>

    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Font Awesome (CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Google Fonts (Roboto) -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <!-- Header Section -->
    {{-- <header> --}}
        <nav class="navbar navbar-expand-lg navbar-light py-3 shadow-sm fixed-top" style="background-color: #4b0082;">
            <div class="container">
                <!-- Logo and Brand Title -->
                <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                    <img src="{{ asset('images/Finallogo.jpg') }}" alt="SoftMAT Logo" class="logo rounded-circle">
                    <span class="ml-2 font-weight-bold text-white">SoftMAT Developers</span>
                </a>

                <!-- Toggle Button for Mobile -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar Links -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('services') }}">Our Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    {{-- </header> --}}

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
