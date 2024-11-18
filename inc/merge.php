<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // merge array

    $a1=array("red","green");
    $a2=array("blue","yellow");
    $merge=array_merge($a1,$a2);
    print_r(array_merge($a1,$a2));
    echo "<br/>";

    // push array

    $a=array("a","b","c","d");
    $b=array_push($a,"e");
    print_r($a);
    echo "<br/>";
    echo $b;


    // pop array

    $a=array("a","b","c","d");
    array_pop($a);
    print_r($a);
    echo "<br/>";


    // slice array

    $a=array("a","b","c","d");
    print_r(array_slice($a,2));
    echo "<br/>";


    // splice array

    $a=array("a","b","c","d");
    $b=array("e","f");
    array_splice($a,0,2,$b);
    print_r($a);
    echo "<br/>";


    // // shift array
    // $a=array("red","green","blue","pink");
    //  array_shift($a);
    // print_r ($a);
    // echo "<br/>";


    // unshift array

    $a=array("red","green","blue");
    array_unshift($a);
    print_r($a);
    echo "<br/>";

     



    

    


    ?>
</body>
</html>