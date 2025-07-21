@extends('Layout.home') <!-- Assuming you have a base layout file -->

@section('content')

@include('components.user_header')

<div class="home-bg">

<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
            <img src="{{ asset('images/home-img-1.png') }}" alt="">
         </div>
         <div class="content">
            <span>Upto 50% Off</span>
            <h3>Latest Smartphones</h3>
            <a href="{{ url('category/smartphone') }}" class="btn">Shop Now</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="{{ asset('images/home-img-2.png') }}" alt="">
         </div>
         <div class="content">
            <span>Upto 50% off</span>
            <h3>Latest Watches</h3>
            <a href="{{ url('category/watch') }}" class="btn">Shop Now.</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="{{ asset('images/home-img-3.png') }}" alt="">
         </div>
         <div class="content">
            <span>upto 50% off</span>
            <h3>Latest headsets</h3>
            <a href="{{ url('shop') }}" class="btn">Shop Now.</a>
         </div>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

</div>

<section class="category">

   <h1 class="heading">Shop by Category</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="{{ url('category/laptop') }}" class="swiper-slide slide">
      <img src="{{ asset('images/icon-1.png') }}" alt="">
      <h3>Laptop</h3>
   </a>

   <a href="{{ url('category/tv') }}" class="swiper-slide slide">
      <img src="{{ asset('images/icon-2.png') }}" alt="">
      <h3>Television</h3>
   </a>

   <a href="{{ url('category/camera') }}" class="swiper-slide slide">
      <img src="{{ asset('images/icon-3.png') }}" alt="">
      <h3>Camera</h3>
   </a>

   <a href="{{ url('category/mouse') }}" class="swiper-slide slide">
      <img src="{{ asset('images/icon-4.png') }}" alt="">
      <h3>Mouse</h3>
   </a>

   <a href="{{ url('category/fridge') }}" class="swiper-slide slide">
      <img src="{{ asset('images/icon-5.png') }}" alt="">
      <h3>Fridge</h3>
   </a>

   <a href="{{ url('category/washing') }}" class="swiper-slide slide">
      <img src="{{ asset('images/icon-6.png') }}" alt="">
      <h3>Washing machine</h3>
   </a>

   <a href="{{ url('category/smartphone') }}" class="swiper-slide slide">
      <img src="{{ asset('images/icon-7.png') }}" alt="">
      <h3>Smartphone</h3>
   </a>

   <a href="{{ url('category/watch') }}" class="swiper-slide slide">
      <img src="{{ asset('images/icon-8.png') }}" alt="">
      <h3>Watch</h3>
   </a>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

<section class="home-products">

   <h1 class="heading">Latest products</h1>

   <div class="swiper products-slider">

   <div class="swiper-wrapper">

      @foreach($products as $product)
      <form action="" method="post" class="swiper-slide slide">
          <input type="hidden" name="pid" value="{{ $product->id }}">
          <input type="hidden" name="name" value="{{ $product->name }}">
          <input type="hidden" name="price" value="{{ $product->price }}">
          <input type="hidden" name="image" value="{{ $product->image_01 }}">
          <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
          <a href="quick_view.php?pid={{ $product->id }}" class="fas fa-eye"></a>
          <img src="uploaded_img/{{ $product->image_01 }}" alt="">
          <div class="name">{{ $product->name }}</div>
          <div class="flex">
              <div class="price"><span>Nrs.</span>{{ $product->price }}<span>/-</span></div>
              <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
          </div>
          <input type="submit" value="add to cart" class="btn" name="add_to_cart">
      </form>
  @endforeach
  

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

@include('components.footer')

@endsection

@push('scripts')
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script>
var swiper = new Swiper(".home-slider", {
   loop: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable: true,
   },
});

var swiper = new Swiper(".category-slider", {
   loop: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable: true,
   },
   breakpoints: {
      0: { slidesPerView: 2 },
      650: { slidesPerView: 3 },
      768: { slidesPerView: 4 },
      1024: { slidesPerView: 5 },
   },
});

var swiper = new Swiper(".products-slider", {
   loop: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable: true,
   },
   breakpoints: {
      550: { slidesPerView: 2 },
      768: { slidesPerView: 2 },
      1024: { slidesPerView: 3 },
   },
});
</script>
@endpush

