<?php
session_start();
if(!isset($_SESSION['rnam'])){
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">

    <div>
        Name:<br>
        <input type="text" name="txtName"/>
    </div>
        Email:<br>
        <input type="text" name="txtName"/>
    <div>

    <div>
        Phone:<br>
        <input type="text" name="txtName"/>
    </div>

    <div>
        <input type="Submit" name="Submit" />
    </div>

    <a href="log_out.php">Logout</a>

    </form>
</body>
</html>