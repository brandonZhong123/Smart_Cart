<x-layout noFooter="true"> 
    <div class="cart-wrapper"> 
        <div class="left-cart-page">
        <h1>MY SHOPPING BAG</h1>
        <table>
            <tr>
            <th>PRODUCT</th>
            <th> QUANTITY </th>
            <th>PRICE</th>
            <th>TOTAL</th>
            
            </tr>
            
            @if(isset($cart))
            @foreach($cart as $cartItem)
                <tr>
                <td>
                    <div class="product-details"> 
                    <img src="images/placeholder.png" alt="Product Image">
                    <div class="product-info">
                        <p>{{$cartItem['item']}}</p>
                        <a >{{$cartItem['company']}}</a>
                        <a href="/cart/remove/{{$cartItem['id']}}">Remove | Edit</a>
                    </div>
                    </div>
                </td>
                <td>
                    <p> {{$cartItem['qty']}} </p>
                </td>
                <td>
                    <p>{{$cartItem['originalPrice']}}</p>
                </td>

                <td>
                    <p> {{$cartItem['price']}} </p>
                </td>
                </tr>    
            @endforeach
            @endif
        </table>
        </div>
        <div class="right-cart-page">
        <h1>SUMMARY</h1>
        <div class="subtotal">
            <p>Subtotal</p>
            <p>${{$total}}</p>
        </div>
        <div class="shipping">
            <p>Shipping</p>
            <p> $5.00 </p>
        </div>
        <div class="sales-tax">
            <p>Sales Tax (13%)</p>
            <p> ${{round($total * 0.13, 2)}}</p>
        </div>
        <div class="total">
            <p>Estimated Total</p>
            <p>$ {{round($total * 1.13, 2)}}</p>
        </div>
        <a href="/cart/checkout"><button>CHECKOUT</button></a>
        </div>
    </div>
</x-layout>