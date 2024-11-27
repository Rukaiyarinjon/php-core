
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prime</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <input type="number" name="number" id="number">
        <input type="submit" name="submit" id="Submit">
    </form>

    <?php 
    $number=$_POST['number'];
    $count=0;
        if($number==1 || $number==0){
        echo "$number is not prime";
        
    }
    else{
         for($i=2;$i < $number;$i++){
            if($number % $i ==0){
                $count++;
                break;
                echo "$number is not prime";
            }
            }

            if($count>0){
                echo "$number is not prime";
            }
            else{
                echo "$number is prime";
            }
    
    }
    
    
    
    ?>
</body>
</html>