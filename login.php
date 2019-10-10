<?php
if(isset($_POST['login'])){
   $username=$_POST['username'] ;
    $password=$_POST['password'] ;


    $sql= "SELECT * from coffetabel WHERE username='$username' && password= '$password'";

    include ('db.php');


}


?>
<?php include('header.php') ?>

<div>
<form action="login.php" method="POST">
    <div class="form-group">
        <label>username</label>
        <input type="text"  name="username"  required >

    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password"  required>
    </div>

    <button type="submit" name="login" class="btn btn-primary">Log In</button>
</form>
</div>

<?php include('footer.php') ?>