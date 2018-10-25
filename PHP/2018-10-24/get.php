<?php
echo "dung roi,get.php";

// echo $_GET['email'];
       
if ($_GET['email'] === "a@gmail.com" & $_GET['password'] === "123456"){
echo "Dang nhap thanh cong";
}
else {
    header ('location: ./form.php');
}
?>
