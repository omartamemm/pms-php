
<?php include "inc/header.php"; ?>




<form action="handelers/handel_register.php" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" id="name" name="name" class="form-control">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="text" id="email" name="email" class="form-control">
    </div>

    
    <div class="mb-3">
        <label for="phone" class="form-label">Phone:</label>
        <input type="text" id="phone" name="phone" class="form-control">
    </div>

    <div class="mb-3">
        <label for="gender" class="form-label">Gender</label>
        <select name="gender" id="type" class="form-select">
            <option value="male">male</option>
            <option value="female">female</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="text" id="password" name="password" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php include "inc/footer.php"; ?>