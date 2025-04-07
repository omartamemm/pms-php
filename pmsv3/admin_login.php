
<?php include ("inc/header.php") ?>




<form action="handelers/handel_admins.php" method="POST">
  <!-- name input -->
  <div data-mdb-input-init class="form-outline mb-4">

    <input type="text" id="form2Example1" class="form-control" name="name" />

    <label class="form-label" for="form2Example1">admin name</label>
  </div>

  <!-- Password input -->

  <div data-mdb-input-init class="form-outline mb-4">
    <input type="text" id="form2Example2" class="form-control" name="password" />
    <label class="form-label" for="form2Example2">Password</label>
  </div>

  

  <!-- Submit button -->
  <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>

  
  
</form>

