<x-layout>
  <form class="submit-form" method="POST"> 
    <h1 class="submit-header"> Log Into Your Account </h1>
      <div> 
        <label class="submit-label" for="first-name"> Username Or Email</label>
        <input class="submit-input" type="text" id="first-name" name="first_name" placeholder=>
        <p class="error-message"> Enter your name </p>
      </div>
      <div>
        <label class="submit-label" for="last-name"> Password</label>
        <input class="submit-input" type="text" id="last-name" name="last_name">
      </div>
      <button type="submit"> Log In </button>
  </form>  
</x-layout>
