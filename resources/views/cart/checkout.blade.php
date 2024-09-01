<x-layout>
  <form class="checkout-form" action="/cart/checkout/store" method="POST">
      @csrf
      <div class="left-checkout-page">
          <h1>Contact Information</h1>
          <input class="checkout-input" type="email" name="email" placeholder="Email Address" required>
          
          <h1>Shipping Address</h1>
          <input class="checkout-input" type="text" name="country" placeholder="Country" required>
          <div class="legal-name">
              <input class="checkout-input" type="text" name="first_name" placeholder="First Name" required>
              <input class="checkout-input" type="text" name="last_name" placeholder="Last Name" required>
          </div>
          <input class="checkout-input" type="text" name="address" placeholder="Address" required>
          <input class="checkout-input" type="text" name="apartment" placeholder="Apartment, Suite, etc. (Optional)">

          <div class="city-postalcode">
              <input class="checkout-input" type="text" name="city" placeholder="City" required>
              <input class="checkout-input" type="text" name="postal_code" placeholder="Postal Code" required>
          </div>
          <input class="checkout-input" type="tel" name="phone" placeholder="Phone Number (Optional)">
      </div>
      
      <div class="right-checkout-page">
          <h1>Order Summary</h1>
          <div class="product-summary">
              <table>
                  <tr>
                      <th>PRODUCT</th>
                      <th>QUANTITY</th>
                      <th>PRICE</th>
                      <th>TOTAL</th>
                  </tr>
                  @if(isset($cart))
                      @foreach($cart as $cartItem)
                          <tr>
                              <td>
                                  <div class="product-details"> 
                                      <img src="{{$cartItem['picture'] ? asset('storage/' . $cartItem['picture']) : asset('images/placeholder.png') }}" alt="Product Image">
                                      <div class="product-info">
                                          <p>{{ $cartItem['item'] }}</p>
                                          <a>{{ $cartItem['company'] }}</a>
                                          <a href="/cart/remove/{{ $cartItem['id'] }}">Remove</a>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <p>{{ $cartItem['qty'] }}</p>
                              </td>
                              <td>
                                  <p>{{ $cartItem['originalPrice'] }}</p>
                              </td>
                              <td>
                                  <p>{{ $cartItem['price'] }}</p>
                              </td>
                          </tr>    
                      @endforeach
                  @endif
              </table>
          </div>

          <div class="order-total">
              <p>Subtotal: <span>{{ $total }}</span></p>
              <p>Shipping: <span>$5.00</span></p>
              <p>Sales Tax: <span>${{ round($total * 0.13, 2) }}</span></p>
              <p class="total-summary">Total: <span>${{ round($total * 1.13, 2) }}</span></p>
          </div>

          <button type="submit" class="place-order-button">Place Order</button>
      </div>
  </form>
</x-layout>
