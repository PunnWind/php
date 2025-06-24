<?php
    include 'connect.php';
    // Check if the form is submitted
    $zone = $_POST['zone'];
    $temp = $_POST['temp'];
    $humi = $_POST['humi'];
    $user = $_POST['user'];

    $sql = "INSERT INTO tbl_iot (zone, temp, humi, users) VALUES ('$zone', '$temp', '$humi', '$user')";
   
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>