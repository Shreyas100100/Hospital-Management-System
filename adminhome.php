<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "user";


$conn = mysqli_connect($host, $user, $password, $db);
if ($conn === false) {
    die("connection error");
}
$query = "select * from book";
$result = mysqli_query($conn, $query);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive hospital website design </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            padding-top: 80px;
        }
    </style>
</head>

<body>
    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> HMS </a>

        <nav class="navbar">
            <a href="adminhome.php">Patient Data</a>
            <a href="dpeers.php">doctors</a>
            <a href="logout.php">logout</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <center>
        <div style="padding-top:200px " >
            <table class="table table-bordered" style="width:70% ">
                <thead class="thead-dark">
                    <tr>
                        <th colspan="4">
                            <h2 style="text-align:center">Patient Record</h2>
                        </th>
                    </tr>
                    <th> Username </th>
                    <th> Name </th>
                    <th> Number </th>
                    <th> email </th>

                    </tr>
                </thead>

                <?php while ($rows = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $rows['username']; ?></td>
                        <td><?php echo $rows['patient_name']; ?></td>
                        <td><?php echo $rows['patient_num']; ?></td>
                        <td><?php echo $rows['patient_mail']; ?></td>
                    </tr>
                <?php
                }
                ?>
        </div>
    </center>

</body>