<x-layout>
  <form class="account-register" method="POST"> 
    <h1 class="register-header"> Register an Account </h1>

    <div> 
      <label class="register-label" for="first-name">First Name</label>
      <input class="register-input" type="text" id="first-name" name="first_name" placeholder=>
      <p class="error-message"> Enter your name </p>
    </div>

    <div>
      <label class="register-label" for="last-name">Last Name</label>
      <input class="register-input" type="text" id="last-name" name="last_name">
    </div>

    <div>
      <label class="register-label" for="username">Username</label>
      <input class="register-input" type="text" id="username" name="username">
    </div>
        
    <div>
      <label class="register-label" for="email">Email</label>
      <input class="register-input" type="text" id="email" name="email">
    </div>

    <div>
      <label class="register-label" for="password">Password</label>
      <input class="register-input" type="text" id="password" name="email">
    </div>

    <div>
      <label class="register-label" for="confirm-password">Confirm Password</label>
      <input class="register-input" type="text" id="password" name="email">     
    </div>

    <button type="submit"> Sign Up </button>

    </form>  
</x-layout>
