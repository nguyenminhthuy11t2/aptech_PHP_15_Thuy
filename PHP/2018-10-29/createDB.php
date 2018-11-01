<?php
$conn = mysqli_connect("localhost", "root");
$sql = "CREATE DATABASE aptech_php_15_ss4";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
mysqli_close($conn);
?>