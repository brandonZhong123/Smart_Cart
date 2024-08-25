<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
  <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
  <link rel="stylesheet" href="{{ asset('css/featured-products.css') }}">
  <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
  <link rel="stylesheet" href="{{ asset('css/product-hero.css') }}">
  <link rel="stylesheet" href="{{ asset('css/product-page.css') }}">
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <title>Home Page</title>
</head>
<body>

  <!-- Header/navbar -->
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
      <form action="/search" method="GET"> 
        <input class="search-bar" type="text" name="search" placeholder="Search Now"> 
        <button type="submit" class="search-icon">
          <i class="fa-solid fa-magnifying-glass fa-2x"></i>
        </button>
      </form> 
    </nav>
    <nav class="navbar-right">
      <a class="log-in" href="/login">Login</a>
      <a class="register" href="/register">Register</a>
      <i class="fa-solid fa-cart-shopping fa-2x"></i>
    </nav>
  </header>

  <main class="content">
    {{$slot}}
  </main>

  <footer class="footer">
    <div class="contact-information">
      <ul>
        <li class="contact-item"><i class="fa-solid fa-phone"></i> (123)-456-7890</li>
        <li class="contact-item email"><i class="fa-solid fa-envelope"></i> email@email.com</li>
        <li class="contact-item website"><i class="fa-solid fa-globe"></i> website.com</li>
      </ul>
    </div>
    <div class="footer-section company">
      <h1>Company</h1>
      <ul>
        <li>About Us</li>
        <li>Careers</li>
        <li>Customer Service</li>
        <li>Legal</li>
      </ul>
    </div>
    <div class="footer-section resources">
      <h1>Resources</h1>
      <ul>
        <li>Blog</li>
        <li>Customer Reviews</li>
        <li>Affiliate Program</li>
        <li>Strategic Partners</li>
      </ul>
    </div>
    <div class="social-media">
      <i class="fa-brands fa-facebook fa-2x"></i>
      <i class="fa-brands fa-instagram fa-2x"></i>
      <i class="fa-brands fa-twitter fa-2x"></i>
      <i class="fa-brands fa-linkedin fa-2x"></i>
      <i class="fa-brands fa-youtube fa-2x"></i>
    </div>
  </footer>
</body>
</html>
