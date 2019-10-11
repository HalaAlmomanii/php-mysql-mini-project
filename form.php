<?php
 include ('db.php');
session_start();
if (isset($_POST["submit"])) {
    $fname=  $_POST["fname"];
     $lname=  $_POST["lname"];
     $password= $_POST["password"];
     $username=$_POST["username"];
      $email=$_POST["email"];

$_SESSION["name"] = $fname;

   $sql= "INSERT INTO coffetabel (fname,lname , password, username, email) VALUES (:fname,:lname,:password,:username,:email)";

    $stmt=$conn->prepare($sql);
    $stmt->execute(['fname'=>$fname,'lname'=>$lname , 'password'=>$password, 'username'=>$username, 'email'=>$email]);
  header('Location:dashbord.php');




} 
?>

<!doctype>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
</head>
<body>

<?php include('header.php') ?>


<!--<div class="container" style="align-items: center">-->
<section>

    <form action="form.php" method="POST">

        <div class="form-group">
            <label>fname</label>
            <input type="text" name="fname" class="form-control" placeholder="First name" required>
        </div>
        <div class="form-group">
            <label>lname</label>
            <input type="text" name="lname" class="form-control" placeholder=" last name" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>


        <div class="form-group">
            <label>username</label>
            <input type="text" name="username" class="form-control" placeholder="username" required>
        </div>
        <div class="form-group  >
            <label for=" exampleInputEmail1
        " >Email address</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email" required>

        </div>


        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</section>


<?php include('footer.php') ?>
</body>
</html>
