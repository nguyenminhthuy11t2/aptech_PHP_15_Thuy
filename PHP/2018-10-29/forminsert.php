<?php

require './helper.php';
$conn = connectDatabase();
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql = "INSERT INTO users (name,email,password)
VALUES( '$name', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>