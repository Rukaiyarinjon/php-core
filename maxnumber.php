<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>max number</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            Enter the Number:<br>
            <input type="number" name="number1" id="number1">
            <input type="number" name="number2" id="number2">
            <input type="number" name="number3" id="number3">
                <input type="submit" name="submit" id="Submit">
    </form>

  <?php 
    


    $number1= $_POST['number1'];
    $number2= $_POST['number2'];
    $number3= $_POST['number3'];
    $max=0;
    if($number1>$number2 && $number1>$number3){
        $max= $number1;
        echo "max number is $max";
    }else if($number2>$number1 && $number2>$number3){
        $max= $number2;
        echo "max number is $max";
    }else{
        echo "max number is $number3";
    }
    

    ?>


  
</body>
</html>