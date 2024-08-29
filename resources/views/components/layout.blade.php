<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">
  <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
  <link rel="stylesheet" href="{{ asset('css/featured-products.css') }}">
  <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
  <link rel="stylesheet" href="{{ asset('css/product-hero.css') }}">
  <link rel="stylesheet" href="{{ asset('css/product-page.css') }}">
  <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
  <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
  
  
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <title>Home Page</title>
</head>
<body>

  <!-- Header/navbar -->
  @if (!isset($noHeader) || !$noHeader)
    @include('partials._navbar')
  @endif
  {{$slot}}
  

  @if (!isset($noFooter) || !$noFooter)
    @include('partials._footer')
  @endif
</body>
</html>
