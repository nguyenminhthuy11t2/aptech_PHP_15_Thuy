<?php
echo "dung roi,post.php";

// echo $_GET['email'];
       
if ($_POST['email'] === "a@gmail.com" & $_POST['password'] === "123456"){
echo "Dang nhap thanh cong";
}
else {
    header ('location: ./form.php');
}
?>