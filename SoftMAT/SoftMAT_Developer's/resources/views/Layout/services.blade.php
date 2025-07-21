@extends('layout.layout')

@section('title', 'Our Services')

@section('content')
<section class="services fade-in py-5">
    <div class="container">
        <!-- Header Section -->
        <div class="col-lg-12 mb-2 text-sm-center">
        <div  class="service-item card shadow-sm fade-in h-100">
            <h1 class="text-purple font-weight-bold">Our Services</h1>
            <p class="text-muted">
                At SoftMAT, we provide a wide range of services tailored to meet your business needs. Our commitment to excellence ensures your satisfaction and success.
            </p>
        </div>
        </div>

        <!-- Services List -->
        <div class="row">
            <!-- Graphic Design -->
            <div class="col-lg-6 mb-4">
                <div class="service-item card shadow-sm fade-in h-100">
                    <div class="card-body">
                        <h2 class="text-purple font-weight-bold">Graphic Design</h2>
                        <p class="text-muted">
                            Transform your ideas into visually stunning graphics that captivate your audience. Our graphic design services include branding, marketing materials, and digital design.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Web Development -->
            <div class="col-lg-6 mb-4">
                <div class="service-item card shadow-sm fade-in h-100">
                    <div class="card-body">
                        <h2 class="text-purple font-weight-bold">Web Development</h2>
                        <p class="text-muted">
                            We create responsive and user-friendly websites that enhance your online presence. Our web development services include front-end and back-end development tailored to your requirements.
                        </p>
                    </div>
                </div>
            </div>

            <!-- SEO Services -->
            <div class="col-lg-6 mb-4">
                <div class="service-item card shadow-sm fade-in h-100">
                    <div class="card-body">
                        <h2 class="text-purple font-weight-bold">SEO Services</h2>
                        <p class="text-muted">
                            Optimize your website for search engines to improve visibility and drive traffic. Our SEO services cover keyword research, on-page optimization, and link building strategies.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Mobile App Development -->
            <div class="col-lg-6 mb-4">
                <div class="service-item card shadow-sm fade-in h-100">
                    <div class="card-body">
                        <h2 class="text-purple font-weight-bold">Mobile App Development</h2>
                        <p class="text-muted">
                            Develop high-quality mobile applications that engage users and enhance their experience. Our team specializes in Flutter app development for both iOS and Android platforms.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
