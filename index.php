<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
       body{
    padding: 10%;
    margin:0;
    background-image: url("img/bg.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-position: center;

       }
 .container{
    border-radius: 10px;
 }

    </style>
    <title>User Dashboard</title>
</head>
<body id="h">
    <div style="background-color:aqua"class="container">
        <h1 >Welcome to Dashboard</h1>
        <br/>
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
</body>

</html>