<?php
require './helper.php';
$conn = connectDatabase();

$sql = "CREATE DATABASE thuy";
if ($conn->query($sql) === true) {
echo "Database created successfully <br>";
} else {
echo "Error creating database : " . $conn->error."<br>";
}


$sql1 = "CREATE TABLE thuy.nnUser (
    uId int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uLastName varchar(255),
    uFirstName varchar(255),
    uEmail varchar(255) NOT NULL UNIQUE,
    uRole int NOT NULL DEFAULT 2,
    uState int NOT NULL DEFAULT 1,
    uCreatedDate datetime NOT NULL DEFAULT NOW(),
    uModifiedDate datetime
    )";
    
    if ($conn->query($sql1) === true) {
    echo "Table nnUser created successfully <br>";
    } else {
    echo "Error creating table : " . $conn->error ."<br>";
    }
    


$sql2 = "INSERT INTO thuy.nnUser (uLastName,uFirstName,uEmail,uRole)
VALUES
( 'Nam', 'Nguyen', 'namnh.website@gmail.com', 1),
( 'John', 'Cenna', 'cenna.john@hotmail.com', 2),
( 'Henry', 'Tran', 'tranhe@resolutioninc.com', 2),
('Christiaan', 'Hunter', 'ch.pageworth@pageworth.com', 1),
( 'Vicky', 'Nguyen', 'vicky06@gmail.com', 2)";

if ($conn->query($sql2) === true) {
echo "Table nnUser created successfully";
} else {
echo "Error insert table : " . $conn->error."<br>";
}

$stmt = $conn->prepare("INSERT INTO thuy.nnUser (uLastName,uFirstName,uEmail,uRole) VALUES (?,?,?,?)");
$stmt->bind_param("sssi", $uLastName, $uFirstName, $uEmail, $uRole);

$uLastName = 'Ford';
$uFirstName = 'Henry';
$uEmail = "henry.ford@ford.com";
$uRole = 2;
$stmt->execute();

echo "Using Prepared to insert new data successfully <br>";

$stmt->close();

$sql4 = "SELECT * FROM thuy.nnUser limit 3";
$result = $conn->query($sql4);
if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
echo " UserID : " . $row["uId"] . " - Full Name : " . $row["uLastName"] . " " . $row["uFirstName"] . " - Email : " . $row["uEmail"] . "<br>";
}
} else {
echo "0 results";
}
$conn->close();