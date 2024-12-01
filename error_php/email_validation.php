<?php
if(isset($_POST['btnSubmit'])){
    $email=$_POST['email'];
    $obj= new Email($email);
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
        <input type="email" name="email"/>
        <input type="Submit" name="btnSubmit" value="Submit"/>

    </form>
</body>
</html>