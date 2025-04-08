<?php
session_start();

include "inc/header.php";
?>

<!-- add admins -->
<div class="container">
    <h1 class="mb-4">Admin Dashboard</h1>
    <h1 class="mb-4"><?php
                        if (isset($_SESSION['admin_name'])) {
                            echo "<div style='color:red'>" . "MR / " . $_SESSION['admin_name'];
                        }

                        ?></h1>



    <div class="row">
        <div class="col-md-6">
            <h2>Add Admin</h2>
            <form method="POST" action="handelers/handel_add_admin.php">
                <div class="form-group">
                    <label for="adminName">Admin Name</label>
                    <input type="text" class="form-control" id="adminName" name="admin_name" required>
                </div>

                <div class="form-group">
                    <label for="adminEmail">Admin password</label>
                    <input type="text" class="form-control" id="adminEmail" name="admin_password" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Admin</button>
            </form>
        </div>

        <!-- addd _user -->

        <div class="col-md-6">

            <h2>Add User</h2>

            <form action="handelers/handel_add_user.php" method="POST">
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


                <button type="submit" class="btn btn-primary">Add User</button>
            </form>
        </div>
    </div>

    <!-- users list -->
    <h2 class="mt-5">Users List</h2>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Password</th>
                <th></th>
                <th></th>


            </tr>
        </thead>
        <tbody>

            <?php

            $file = "data/emp.json";

            if (file_exists($file)) {

                $users = json_decode(file_get_contents($file), true);

                if (! is_array($users)) {
                    $users = [];
                }

                foreach ($users as $user) {
                    echo "
            <tr>
                <td>{$user['id']}</td>

                <td>{$user['name']}</td>
                <td>{$user['email']}</td>
                <td>{$user['phone']}</td>
                <td>{$user['gender']}</td>
                <td>{$user['password']}</td>

                <td>
                <a href='edit.php?id={$user['id']}' class='btn btn-danger btn-sm' >Edit</a>
             
                </td> 

                <td>

                 <form action='handelers/delete_user.php' method='POST'>

                 <input type='hidden' name='id'  value='{$user['id']}'> 
             
                  <input type='submit' class='btn btn-danger' value='Delete'>
                 </form>
                
                
                </td>

            </tr>


            ";
                }
            }

            ?>

        </tbody>
    </table>

    <h2 class="mt-5">Admins List</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>password</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $admins_file = "data/admins.json";

            if (file_exists($admins_file)) {

                $admins = json_decode(file_get_contents($admins_file), true);

                if (! is_array($admins)) {
                    $admins = [];
                }

                foreach ($admins as $admin) {
                    echo "
    <tr>
        <td>{$admin['name']}</td>

        <td>{$admin['password']}</td>

    </tr>


    ";
                }
            }

            ?>
        </tbody>
    </table>

    <div class="col-md-6">

        <form action="core/logout.php">

            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
</div>