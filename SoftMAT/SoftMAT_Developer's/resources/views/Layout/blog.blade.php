@extends('layout.layout')

@section('title', 'Blog')

@section('content')
<section class="blog fade-in py-5">
    <div class="container">
        <!-- Header Section -->
        <div class="col-lg-12 mb-2 text-sm-center">
            <div class="service-item card shadow-sm fade-in h-100">
                <h1 class="font-weight-bold">Our Blog</h1>
                <p class="text-muted">
                    Welcome to our blog! Here, you’ll find the latest updates, insights, and tips from the world of software development and design. Stay tuned for our daily posts!
                </p>
            </div>

            <!-- Blog Posts Section -->
            <div class="row">
                @if($posts->isEmpty())
                <div class="col-12">
                    <p class="text-muted">No blog posts available at this time.</p>
                </div>
                @else
                @foreach ($posts as $post)
                <div class="col-lg-4 col-md-6 mb-4">
                    <article class="blog-post shadow-sm border rounded p-3">
                        <img src="{{ $post->image ? asset('storage/' . $post->image) : asset('images/placeholder.png') }}" alt="{{ $post->title }}" class="blog-post-image img-fluid rounded mb-3">
                        <h2 class="blog-post-title text-dark">{{ $post->title }}</h2>
                        <p class="blog-post-excerpt text-muted">{{ Str::limit($post->content, 150) }}</p>
                        <a href="{{ route('blog', $post->id) }}" class="btn btn-purple">Read More</a>
                    </article>
                </div>
                @endforeach
                @endif
            </div>

            <!-- Pagination Section -->
            <div class="pagination mt-5">
                {{ $posts->links() }}
            </div>
        </div>
</section>
@endsection
