<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['patient_name']) &&
        isset($_POST['patient_num']) && isset($_POST['patient_mail'])) {
        
        $username = $_POST['username'];
        $patient_name = $_POST['patient_name'];
        $patient_num = $_POST['patient_num'];
        $patient_mail = $_POST['patient_mail'];
        // $date = $_POST['dt'];
        
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "user";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT username FROM book WHERE username = ? LIMIT 1";
            $Insert = "INSERT INTO book(username, patient_name, patient_num, patient_mail) values(?, ?, ?, ?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->bind_result($resultusername);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssis",$username, $patient_name, $patient_num, $patient_mail);
                if ($stmt->execute()) {
                    // echo "New record inserted sucessfully.";
                    header("location:insert_success.php");
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this username.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>