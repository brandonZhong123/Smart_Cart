<x-layout :noFooter="true">
  <form method="POST" action="/users" class="submit-form"  >
    <h1 class="submit-header"> Register an Account </h1>
    @csrf
  
    <div>
      <label class="submit-label" for="first-name">Name</label>
      <input class="submit-input" type="text" id="name" name="name" required>
      @error('name')
        <p class="error-message" >{{$message}}</p>
      @enderror   
    </div>
        
    <div>
      <label class="submit-label" for="email">Email</label>
      <input class="submit-input" type="email" id="email" name="email" required>
      @error('email')
        <p class="error-message" >{{$message}}</p>
      @enderror 
    </div>
  
    <div>
      <label class="submit-label" for="password">Password</label>
      <input class="submit-input" type="password" id="password" name="password" required>

      @error('password')
        <p class="error-message" >{{$message}}</p>
      @enderror 
    </div>
  
    <div>
      <label class="submit-label" for="confirm-password">Confirm Password</label>
      <input class="submit-input" type="password" id="confirm-password" name="password_confirmation" required>

      @error('password_confirmation')
        <p class="error-message" >{{$message}}</p>
      @enderror     
    </div>
  
    <button type="submit" class="submit-button">Sign Up</button>
  </form> 
</x-layout>