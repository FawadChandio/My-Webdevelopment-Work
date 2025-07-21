@extends('layout.layout')

@section('title', 'Contact Us')

@section('content')
<section class="contact fade-in py-5">
    <div class="container">
        <!-- Header Section -->
        <div class="col-lg-12 mb-2 text-sm-center">
            <div class="text-center mb-5">
                <h1 class="text-purple font-weight-bold">Contact Us</h1>
                <p class="text-muted">
                    We'd love to hear from you! Whether you have a question about our services, need assistance, or just want to say hello, feel free to reach out.
                </p>
            </div>
        </div>

        <!-- Contact Information Section -->
        <div class="row mb-5">
            <div class="col-md-6 mb-4">
                <div class="contact-info card shadow-sm fade-in h-100">
                    <div class="card-body">
                        <h2 class="text-purple font-weight-bold">Get in Touch</h2>
                        <p><strong>Email:</strong> <a href="mailto:softmatofficial7271@gmail.com" class="text-muted">softmatofficial7271@gmail.com</a></p>
                        <p><strong>Phone:</strong> <a href="tel:+923146507729" class="text-muted">+923146507729</a></p>
                        <p><strong>LinkedIn:</strong> <a href="https://www.linkedin.com/company/softmat-developer-s/?viewAsMember=true" class="text-muted">SoftMAT Developer's</a></p>
                        <p><strong>WhatsApp:</strong> <a href="https://wa.me/923146507729" class="text-muted">+923146507729</a></p>

                        <p><strong>Address:</strong> Multan, Punjab, Pakistan</p>
                    </div>
                </div>
            </div>

            <!-- Contact Form Section -->
            <div class="col-md-6 mb-4">
                <div class="contact-form card shadow-sm fade-in h-100">
                    <div class="card-body">
                        <h2 class="text-purple font-weight-bold">Send Us a Message</h2>
                        <form action="{{ route('contact') }}" method="POST" class="form">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" required class="form-control" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" required class="form-control" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" rows="5" required class="form-control" placeholder="Your Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-purple w-100">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
