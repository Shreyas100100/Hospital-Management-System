<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "user";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {

    die("failed to connect!");
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $pname = $_POST['pname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    if (!empty($username) && !empty($password)) {

        //save to database
        $query = "insert into login_details (username,password,usertype) values ('$username','$password','Patient')";

        mysqli_query($con, $query);

        header("Location: login.php");
        die;
    } else {
        echo "Please enter some valid information!";
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMS System </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            padding-top: 80px;
        }
    </style>
</head>

<body>
    <center>
        <!-- booking section starts   -->
        <section class="book" id="book">
            <h1 class="heading"> <span>WELCOME TO </span>HMS</h1>
            <div class="row">
                <div class="image">
                    <img src="image\reg.gif" alt="">
                </div>
                <form method="POST">
                    <h3>SIGN UP</h3>
                    <input type="text" placeholder="Name" class="box" name="pname" required>
                    <input type="text" placeholder="username" class="box" name="username" required>
                    <input type="email" placeholder="email" class="box" name="email" required>
                    <input type="password" placeholder="password" class="box" name="password" required>

                    <input type="submit" value="SIGN-UP" name="submit" class="btn">
                    <br><br><br>
                            <a style="font-size:20px">ALREADY REGISTERED ? || <a href="login.php" style="font-size:20px">LOGIN</a></a>
                </form>
            </div>
        </section>

        <!-- booking section ends -->


    </center>
</body>

</html>