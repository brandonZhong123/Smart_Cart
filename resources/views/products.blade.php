
<x-layout>
    <div class="product-hero"> 
        <p class="hero-label"> Get up 50% off on selected chairs.  </p>
    </div>
    <div class="product-filter"> 
        <button> Hello </button>
        <div class="product-filter-content"> 
            <a href =""> a </a>
            <a href =""> a</a>
            <a href =""> a</a>
            <a href =""> a</a>
        </div>
    </div>

    <div class="product-filter"> 
        <button> Hello </button>
        <div class="product-filter-content"> 
            <a href =""> a </a>
            <a href =""> a</a>
            <a href =""> a</a>
            <a href =""> a</a>
        </div>
    </div>

    <div class="product-filter"> 
      <button> Hello </button>
      <div class="product-filter-content"> 
          <a href =""> a </a>
          <a href =""> a</a>
          <a href =""> a</a>
          <a href =""> a</a>
      </div>
    </div>

    <div class="product-filter"> 
      <button> Hello </button>
      <div class="product-filter-content"> 
          <a href =""> a </a>
          <a href =""> a</a>
          <a href =""> a</a>
          <a href =""> a</a>
      </div>
    </div>

    <div class="product-filter"> 
      <button> Hello </button>
      <div class="product-filter-content"> 
          <a href =""> a </a>
          <a href =""> a</a>
          <a href =""> a</a>
          <a href =""> a</a>
      </div>
    </div>

    <h1> Products </h1>
    <div class="featured-products">

      @foreach($products as $product)
      <div class="product-container">
        <a href="/products/{{$product->id}}"> 
          <img class="product-images"src="images/placeholder.png"> 
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