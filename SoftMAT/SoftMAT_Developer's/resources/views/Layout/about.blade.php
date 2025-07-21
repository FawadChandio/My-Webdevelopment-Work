@extends('layout.layout')

@section('title', 'About Us')

@section('content')
<section class="about fade-in py-5 col-lg-12">
    <div class="container">
        <!-- About Us Section -->
        <div class="mb-5">
            <h1 class=" font-weight-bold">About Us</h1>
            <p class="font-weight-bold">
                SoftMAT is a cutting-edge software development and design firm specializing in creating innovative solutions that elevate businesses. 
                With expertise in Flutter app development, web development, and graphic design, we deliver stunning, functional, and user-friendly products that leave a lasting impression. 
                Our team of skilled professionals is passionate about turning your vision into reality.
            </p>
        </div>

        <!-- Core Values Section -->
        <h2 class="text-center text-purple mb-4">Core Values</h2>
        <ul class="list-unstyled core-values">
            @foreach ($values as $value)
            <li class="d-flex align-items-start mb-3">
                <span class="icon mr-3 text-purple">
                    <i class="fas fa-check-circle"></i>
                </span>
                <div>
                    <h5 class="font-weight-bold text-black">{{ $value->title }}</h5>
                    <p class="text-muted">{{ $value->description }}</p>
                </div>
            </li>
            @endforeach
        </ul>

        <!-- Meet Our Team Section -->
        <h2 class="text-center text-purple my-5">Meet Our Team</h2>
        <div class="row">
            @foreach ($teamMembers as $member)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow-sm team-member text-center fade-in">
                    <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->name }}" class="card-img-top team-photo rounded-circle mx-auto mt-4" style="width: 150px; height: 150px;">
                    <div class="card-body">
                        <h5 class="card-title text-purple font-weight-bold">{{ $member->name }}</h5>
                        <p class="card-subtitle mb-2 text-muted">{{ $member->role }}</p>
                        <p class="card-text">{{ $member->bio }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
