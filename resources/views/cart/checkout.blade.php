<x-layout>
<form class="checkout-form"> 
    <div class="left-checkout-page">
      <h1>Contact Information</h1>
      <input class="checkout-input" type="email" placeholder="Email Address" required>
      
      <h1>Shipping Address</h1>
      <input class="checkout-input" type="text" placeholder="Country" required>
      <div class="legal-name">
        <input class="checkout-input" type="text" placeholder="First Name" required>
        <input class="checkout-input" type="text" placeholder="Last Name" required>
      </div>
      <input class="checkout-input" type="text" placeholder="Address" required>
      <input class="checkout-input" type="text" placeholder="Apartment, Suite, etc. (Optional)">

      <div class="city-postalcode">
        <input class="checkout-input" type="text" placeholder="City" required>
        <input class="checkout-input" type="text" placeholder="Postal Code" required>
      </div>
      <input class="checkout-input" type="tel" placeholder="Phone Number (Optional)">
    </div>
    
    <div class="right-checkout-page">
      <h1>Order Summary</h1>
      <div class="product-summary">
        <table>
          <tr>
            <th>PRODUCT</th>
            <th>PRICE</th>
            <th>TOTAL</th>
          </tr>
          <tr>
            <td>
              <div class="product-details"> 
                <img src="images/placeholder.png" alt="Product Image">
                <div class="product-info">
                  <p>Name</p>
                  <p>Company</p>
                  <p><a href="#">Remove</a> | <a href="#">Edit</a></p>
                </div>
              </div>
            </td>
            <td><p>$4.55</p></td>
            <td><p>$4.55</p></td>
          </tr>
          <!-- Additional products go here -->
        </table>
      </div>

      <div class="order-total">
        <p>Subtotal: <span>$4.55</span></p>
        <p>Shipping: <span>$5.00</span></p>
        <p class="total-summary">Total: <span>$9.55</span></p>
      </div>

      <label class="checkout-label">Card Number</label>
      <input class="checkout-input" type="text" placeholder="0000 0000 0000 0000" required>

      <label class="checkout-label">Name on Card</label>
      <input class="checkout-input" type="text" placeholder="Name on Card" required>
      <div class="expiration-ccv">
        <input class="checkout-input" type="text" placeholder="Expiration Date (MM/YY)" required>
        <input class="checkout-input" type="text" placeholder="CCV" required>
      </div>

      <button type="submit" class="place-order-button">Place Order</button>
    </div>
  </form>
</x-layout>