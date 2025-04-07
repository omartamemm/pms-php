
<?php  include ("inc/header.php"); ?>



<?php 


if(isset($_GET['id'])){

    $id=$_GET['id'];
 
    $users= json_decode(file_get_contents("data/emp.json"), true);

    if (!is_array($users)) {
        $users = [];
    }

    foreach ($users as $user) {

        if( $user['id']==$id){
            $select=$user;
            break;
        }
    }




    

   


}

?>






<form action="handelers/update_user.php" method="POST">
    <input type="hidden" name="id"  value="<?= $select['id']?>"> 

    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" id="name" name="name" class="form-control" value="<?php echo $select['name']?>">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="text" id="email" name="email" class="form-control" value="<?php echo $select['email']?>"> 
    </div>

    
    <div class="mb-3">
        <label for="phone" class="form-label">Phone:</label>
        <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $select['phone']?>">
    </div>

    <div class="mb-3">
        <label for="gender" class="form-label">Gender</label>
        <select name="gender" id="type" class="form-select">
            <option value="male" <?= $select['gender']=='male'? 'selected':" " ?> >male</option>
            <option value="female" <?= $select['gender']=='female'? 'selected':" " ?>>female</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="text" id="password" name="password" class="form-control" value="<?php echo $select['password']?>">
    </div>

    <button type="submit" class="btn btn-danger">UPDATE USER</button>
</form>





