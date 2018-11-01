<?php
$conn = mysqli_connect("localhost", "root","","aptech_php_15_ss4");

$sql = "INSERT INTO users (name,email,password)
VALUES
( 'Nam', 'namnh.website@gmail.com', 31),
( 'John', 'cenna.john@hotmail.com', 22),
( 'Henry', 'tranhe@resolutioninc.com', 32),
('Christiaan', 'ch.pageworth@pageworth.com', 51),
( 'Vicky',  'vicky06@gmail.com', 26)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);