<?php
$conn = mysqli_connect("localhost", "root","","aptech_php_15_ss4");

$sql = "CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR (255),
    email VARCHAR (255) UNIQUE,
    password VARCHAR (255)
    )";
    
if (mysqli_query($conn, $sql)) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>