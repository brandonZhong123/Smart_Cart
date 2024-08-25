
<x-layout> 
  <div class="product-wrapper">
    <div class="left-product-page">
      <img class="product-page-image" src="{{asset('images/placeholder.png')}}">
    </div>
    <div class="right-product-page"> 
      <h1> {{$product->title}}</h1>
      <p> {{$product->company}} </p>

      <p> {{$product->description}} </p>
      <p> Price: ${{$product->price}} CAD  </p> 
      <div class="buttons"> 
        <button class="cart-button"> add to cart</button>   
        <button class="wish-list-button"> add to wish list </button>   
      </div>
    </div>
  </div>
</x-layout>