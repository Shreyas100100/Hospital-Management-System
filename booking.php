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
    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> HMS </a>

        <nav class="navbar">
            <a href="userhome.php">home</a>
            <a href="services.php">services</a>
            <a href="about.php">about</a>
            <a href="Doctors.php">doctors</a>
            <a href="booking.php">book</a>
            <a href="review.php">review</a>
            <a href="logout.php">logout</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </header>

    <!-- header section ends -->
    <!-- booking section starts   -->

    <section class="book" id="book">

        <h1 class="heading"> book now </h1>

        <div class="row">

            <div class="image">
                <img src="image\book.gif" alt="">
            </div>

            <form action="insert.php" method="POST">
                <h3>book appointment</h3>
                <input type="text" placeholder="username" name="username" class="box" required>
                <input type="text" placeholder="your name" name="patient_name" class="box" required>
                <input type="number" placeholder="your number" name="patient_num" class="box" required>
                <input type="email" placeholder="your email" name="patient_mail" class="box" required>

                <input type="submit" value="Submit" name="submit" class="btn">
            </form>

        </div>

    </section>

    <!-- booking section ends -->

</body>

</html>