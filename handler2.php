<?php

require_once "dbconnection.php";

$username = $_POST["phone"];
$email = $_POST["email"];
$password = $_POST["password"];



$sql = "INSERT INTO userinfo(name, email, password, phone) VALUES ('','$email','$password','$username')";

// mysqli_query($conn, $sql);
// echo "Data added Successfully";



// Execute the query and check if it was successful
if (mysqli_query($conn, $sql)) {
    // If the query was successful, display a success alert
    echo "<script type='text/javascript'>
            alert('Data added successfully');
            window.location.href = 'login.php';
          </script>";
} else {
    // If the query failed, display an error alert
    echo "<script type='text/javascript'>
            alert('Error adding data: " . mysqli_error($conn) . "');
            window.location.href = 'index.php';
          </script>";


}

?>