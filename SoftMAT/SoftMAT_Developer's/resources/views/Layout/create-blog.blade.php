<!-- resources/views/admin/create-blog.blade.php -->

@extends('layout.layout')

@section('title', 'Create New Blog Post')

@section('content')
<section class="create-blog fade-in py-5">
    <div class="container">
        <h1 class="text-center text-purple">Create New Blog Post</h1>

        <!-- Display success message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Blog Post Upload Form -->
        <form action="{{ route('createBlogPost') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Blog Title</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" required placeholder="Enter blog title">
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="content">Blog Content</label>
                <textarea id="content" name="content" class="form-control" rows="5" required placeholder="Enter blog content">{{ old('content') }}</textarea>
                @error('content')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Blog Image (Optional)</label>
                <input type="file" id="image" name="image" class="form-control">
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-purple">Upload Blog</button>
        </form>
    </div>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
</section>
@endsection
