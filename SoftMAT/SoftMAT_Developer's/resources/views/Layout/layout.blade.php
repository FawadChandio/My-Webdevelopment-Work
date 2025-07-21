<!-- resources/views/layout/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - SoftMAT</title>

    <!-- Meta Tags for SEO and Social Sharing -->
    <meta name="description" content="SoftMAT - Cutting-edge software development and design services including web development, mobile apps, and graphic design.">
    <meta name="keywords" content="software development, web development, graphic design, mobile apps, flutter, SEO">
    <meta name="author" content="SoftMAT Developer's">

    <!-- Open Graph Meta Tags for Social Sharing -->
    <meta property="og:title" content="@yield('title') - SoftMAT">
    <meta property="og:description" content="SoftMAT - Transforming businesses with innovative software solutions.">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    
    <!-- Font Awesome CDN for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Google Fonts (Roboto) -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS (for responsive design) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Custom CSS for your styling -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Animations CSS (for smooth transitions) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

    <!-- Additional meta tags for better performance -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>

<body>
    <!-- Main Content Wrapper -->
    <div id="app">

        <!-- Header Section -->
        @include('Layout.header') <!-- Including the header partial -->

        <!-- Main Content Section -->
        <main role="main" class="fade-in">
            <div class="container my-5">
                @yield('content') <!-- This is where the specific page content will be injected -->
            </div>
        </main>

        <!-- Footer Section (included globally) -->
        @include('Layout.footer') <!-- Footer now included on every page -->
        
    </div>

    <!-- Optional JavaScript and Popper.js (for Bootstrap functionality) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Font Awesome Script for Icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

    <!-- Custom JavaScript (if any) -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
