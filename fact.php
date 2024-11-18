<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
  
  Enter the Number: <br>
  <input type="number" name="number" id="number">
  <button type="submit">submit</button>

</form>

<?php 
if($_POST){
    $fact =1;
    $number = $_POST['number'];
    echo "Factorial of $number:<br><br>";
    for($i=1; $i<= $number;$i++){
        $fact = $fact * $i;
    }
    echo $fact ."<br>";
}

?>
</body>
</html>