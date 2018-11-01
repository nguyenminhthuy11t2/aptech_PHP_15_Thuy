<?php

require './helper.php';
$conn = connectDatabase();

$email=$_POST['email'];
$password=$_POST['password'];

$sql= "SELECT * FROM users WHERE email= '$email' and password= '$password'";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_array();
if (mysqli_num_rows($result) >0){
    echo "successfully";
    session_start(); 
    $_SESSION['name'] = $row['name'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['info'] = $_POST['infor'];
include './table.php';
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
