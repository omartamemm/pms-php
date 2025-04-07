<?php include ("inc/header.php") ?>

<form method="POST" action="handelers/handel_user_login.php">
  <!-- Email input -->
  <div data-mdb-input-init class="form-outline mb-4">
  <label class="form-label" for="form2Example1">Name</label>

    <input type="text"  id="form2Example1" class="form-control" name="name" />
  </div>

  <!-- Password input -->
  <div data-mdb-input-init class="form-outline mb-4">
  <label class="form-label" for="form2Example2">Password</label>
    <input type="text" id="form2Example2" class="form-control" name="password" />
   
  </div>

  

  <!-- Submit button -->
  <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="register.php">Register</a></p>
   
  </div>
</form>

