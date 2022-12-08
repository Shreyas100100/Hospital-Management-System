<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "user";


$conn = mysqli_connect($host, $user, $password, $db);
if ($conn === false) {
    die("connection error");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];


    $sql = "select * from login_details where username = '" . $username . "'AND password = '" . $password . "'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result);

    if ($row["usertype"] == "Admin") {
        header("location:adminhome.php");
    } else if ($row["usertype"] == "Patient") {
        header("location:userhome.php");
    } else if ($row["usertype"] == "Doctor") {
        header("location:doctorhome.php");
    } else {
        echo "Username or Password incorrect ";
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
                    <img src="image\mobscr.gif" alt="">
                </div>
                <form action="login.php" method="POST">
                    <h3>LOG IN</h3>
                    <input type="text" placeholder="username" class="box" name="username" required>
                    <input type="password" placeholder="password" class="box" name="password" required>
                    <center>
                        
                            <input type="submit" value="LOG IN" class="btn">
                            <br><br><br>
                            <a style="font-size:20px">NEW USER ? || <a href="signup.php" style="font-size:20px">SIGNUP</a></a>
                        
                    </center>
                </form>

            </div>
        </section>

        <!-- booking section ends -->


    </center>
</body>

</html>