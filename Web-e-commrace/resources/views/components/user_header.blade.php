<header class="header">

   <section class="flex">

      <a href="{{ url('home') }}" class="logo">KinBech<span>.Com</span></a>

      <nav class="navbar">
         <a href="{{ url('home') }}">Home</a>
         <a href="{{ url('about') }}">About Us</a>
         <a href="{{ url('orders') }}">Orders</a>
         <a href="{{ url('shop') }}">Shop Now</a>
         <a href="{{ url('contact') }}">Contact Us</a>
      </nav>

      <div class="icons">
         @php
            $user = Auth::user(); // Get the authenticated user, if any

            $total_wishlist_counts = $user ? \DB::table('wishlist')->where('user_id', $user->id)->count() : 0;
            $total_cart_counts = $user ? \DB::table('cart')->where('user_id', $user->id)->count() : 0;
         @endphp

         <div id="menu-btn" class="fas fa-bars"></div>
         <a href="{{ url('search_page') }}"><i class="fas fa-search"></i>Search</a>
         <a href="{{ url('wishlist') }}"><i class="fas fa-heart"></i><span>({{ $total_wishlist_counts }})</span></a>
         <a href="{{ url('cart') }}"><i class="fas fa-shopping-cart"></i><span>({{ $total_cart_counts }})</span></a>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="profile">
         @if ($user)
            @php
               $fetch_profile = $user; // Use the authenticated user data directly
            @endphp

            <p>{{ $fetch_profile->name }}</p>
            <a href="{{ url('update_user') }}" class="btn">Update Profile</a>
            <div class="flex-btn">
               <a href="{{ url('user_register') }}" class="option-btn">Register</a>
               <a href="{{ url('user_login') }}" class="option-btn">Login</a>
            </div>
            <a href="{{ url('user_logout') }}" class="delete-btn" onclick="return confirm('Are you sure you want to logout?');">Logout</a> 
         @else
            <p>Please Login or Register First to proceed!</p>
            <div class="flex-btn">
               <a href="{{ url('user_register') }}" class="option-btn">Register</a>
               <a href="{{ url('user_login') }}" class="option-btn">Login</a>
            </div>
         @endif
         
      </div>

   </section>

</header>
