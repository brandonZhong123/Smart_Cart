<x-layout>
  <form class="submit-form" method="POST">
    <h1 class="submit-header">Register an Account</h1>
  
    <div>
      <label class="submit-label" for="first-name">First Name</label>
      <input class="submit-input" type="text" id="first-name" name="first_name" placeholder="Enter your first name" required>
      <p class="error-message" id="first-name-error">Enter your first name</p>
    </div>
  
    <div>
      <label class="submit-label" for="last-name">Last Name</label>
      <input class="submit-input" type="text" id="last-name" name="last_name" required>
      <p class="error-message" id="last-name-error">Enter your last name</p>
    </div>
  
    <div>
      <label class="submit-label" for="username">Username</label>
      <input class="submit-input" type="text" id="username" name="username" required>
      <p class="error-message" id="username-error">Enter your username</p>
    </div>
        
    <div>
      <label class="submit-label" for="email">Email</label>
      <input class="submit-input" type="email" id="email" name="email" required>
      <p class="error-message" id="email-error">Enter a valid email</p>
    </div>
  
    <div>
      <label class="submit-label" for="password">Password</label>
      <input class="submit-input" type="password" id="password" name="password" required>
      <p class="error-message" id="password-error">Enter your password</p>
    </div>
  
    <div>
      <label class="submit-label" for="confirm-password">Confirm Password</label>
      <input class="submit-input" type="password" id="confirm-password" name="confirm_password" required>
      <p class="error-message" id="confirm-password-error">Confirm your password</p>     
    </div>
  
    <button type="submit" class="submit-button">Sign Up</button>
  </x-layout>