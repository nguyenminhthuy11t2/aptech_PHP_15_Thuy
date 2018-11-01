<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body><?php
$name=$_SESSION['name'];
$email=$_SESSION['email'];
$password=$_SESSION['password'];
$info=$_SESSION['info'];
?>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">password</th>
            <th scope="col">info</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td><?php echo $name;?></td>
            <td><?php echo $email;?></td>
            <td><?php echo $password;?></td>
            <td><?php echo $info;?></td>
           
          </tr>
        </tbody>
      </table>    
</body>
</html>