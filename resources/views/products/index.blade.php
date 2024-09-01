
<x-layout>
  <div class="product-hero"> 
    <p class="hero-label">  </p>
    </div>
    <h1 class="product-header"> Products </h1>
    <div class="featured-products">
      @foreach($products as $product)
      <div class="product-container">
        <a href="/products/{{$product->id}}"> 
          <img class="product-images"src="{{$product->picture ? asset('storage/' . $product->picture) : asset('images/placeholder.png') }}"> 
        </a>
        <div class="product-information">  
          <a href="product.html"class="product-title"> {{$product->title}}  </a>
          <p class="product-company"> Company:  {{$product->company}}</p>
          <p class="product-price"> Price: ${{$product->price}} CAD </p>
        </div>
      </div>
      @endforeach
    </div>
</x-layout>