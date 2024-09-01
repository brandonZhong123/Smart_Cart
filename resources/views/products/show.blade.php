
<x-layout> 
  <div class="product-wrapper">
    <div class="left-product-page">
      <img class="product-page-image" src="{{$product->picture ? asset('storage/' . $product->picture) : asset('images/placeholder.png') }}">
    </div>
    <div class="right-product-page"> 
      <h1> {{$product->title}}</h1>
      <p> {{$product->company}} </p>

      <p> {{$product->description}} </p>
      <p> Price: ${{$product->price}} CAD  </p> 
      <div class="buttons"> 
        <a href="/cart/add/{{$product->id}}"><button class="cart-button"> add to cart</button> </a>
      </div>
    </div>
  </div>
</x-layout>