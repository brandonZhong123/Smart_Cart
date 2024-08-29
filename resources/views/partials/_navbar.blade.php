<header class="header"> 
    <nav class="navbar-left"> 
      <img class="logo" src="{{asset('images/logo.png')}}">
      <a href="/">Home</a>
      <div class="dropdown">
        <a href="products.html" class="dropdown-btn">Categories</a>
        <div class="dropdown-content">
          <a href="#">Category 1</a>
          <a href="#">Category 2</a>
          <a href="#">Category 3</a>
          <a href="#">Category 4</a>
        </div>
      </div>
      <a href="products">Shop Now</a>
      <a href="#">Help</a>
      <form class="search-bar-form" action="/products" method="GET"> 
        <input class="search-bar" type="text" name="search" placeholder="Search Now"> 
        <button type="submit" class="search-icon">
          <i class="fa-solid fa-magnifying-glass fa-2x"></i>
        </button>
      </form> 
    </nav>
    <nav class="navbar-right">
      @auth
      <p class="welcome-message"> Welcome {{auth()->user()->name}}</p>
      <form method="POST" action="/logout">
        @csrf
        <button class="logout-button" type="submit"> <i class="fa-solid fa-right-from-bracket"></i> Logout </button>
      </form>
    
      @else

      <a class="log-in" href="/login">Login</a>
      <a class="register" href="/register">Register</a>
      @endauth

      <a style="color: black" href="/cart"> <i class="fa-solid fa-cart-shopping fa-2x"></i> </a>
    </nav>
  </header>