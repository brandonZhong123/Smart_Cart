<x-layout :noFooter="true">
  <form style="
    margin-top: 200px;
    width: 20%;
    "class="submit-form" method="POST" action="/users/authenticate">
    
    @csrf
    <h1 class="submit-header"> Log Into Your Account </h1>
      <div> 
        <label class="submit-label" for="email"> Username Or Email</label>
        <input class="submit-input" type="text" id="email" name="email" placeholder=>

        @error('email')
          <p class="error-message"> {{$message}}</p>
        @enderror
      </div>
      <div>
        <label class="submit-label" for="password"> Password</label>
        <input class="submit-input" type="text" id="password" name="password">

        @error('email')
          <p class="error-message"> {{$message}} </p>
        @enderror
      </div>
      <button class="submit-button" type="submit"> Log In </button>
  </form>  
</x-layout>
