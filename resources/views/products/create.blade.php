
<x-layout>
    @if(auth()->user()->role == 'admin');
    <form class="submit-form" method="POST" action="/products/store" enctype="multipart/form-data">
        @csrf
        <h1 class="submit-header">Submit a Product</h1>
    
        <div>
          <label class="submit-label" for="product-name">Product Name</label>
          <input class="submit-input" type="text" id="product-name" name="title">

          @error('title')
            <p class="error-message"> {{$message}}</p>
          @enderror
        </div>
    
        <div>
          <label class="submit-label" for="company">Company</label>
          <input class="submit-input" type="text" id="company" name="company" >

          @error('company')
            <p class="error-message"> {{$message}}</p>
          @enderror


        </div>
    
        <div>
          <label class="submit-label" for="description">Description</label>
          <textarea class="submit-textarea" id="description" name="description" rows="4" ></textarea>

          @error('description')
            <p class="error-message"> {{$message}}</p>
          @enderror
        </div>
    
        <div>
          <label class="submit-label" for="price">Price</label>
          <input class="submit-input" type="number" id="price" name="price" step="0.01" >

          @error('price')
            <p class="error-message"> {{$message}}</p>
          @enderror
        </div>

        <div>
          <label class="submit-label" for="email">Email</label>
          <input class="submit-input"  name="email" >

          @error('email')
            <p class="error-message"> {{$message}}</p>
          @enderror
        </div>
    
        <div>
          <label class="submit-label" for="picture">Optional Picture</label>
          <input class="submit-input" type="file" id="picture" name="picture">

          @error('picture')
            <p class="error-message"> {{$message}}</p>
          @enderror

        </div>
    
        <button type="submit" class="submit-button">Submit Product</button>
      </form>
      @endif
</x-layout>