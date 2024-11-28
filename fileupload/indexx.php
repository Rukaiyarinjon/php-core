<?php
if(isset($_POST['btnsubmit'])){
    $filename=$_FILES['my_file']['name'];
    $tmp_file=$_FILES['my_file']['tmp_name'];
    $file_size=$_FILES['my_file']['size'];
    $file_type=$_FILES['my_file']['type'];
    $img='image/';
    $kb=100*1024;

    //if(!empty($filename)){
        //move_uploaded_file("$tmp_file","$img.$filename");
    //}else{
        //echo "please select a file";
   // }

   if($kb>900 && $file_type!="jpg"){
    echo "File is too large";
   }else{
    move_uploaded_file($tmp_file,$img.$filename);
    echo "successfully";
   }

   
    //var_dump($filename);
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
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="my_file" id="">
        <input type="submit" name="btnsubmit" value="submit" id="">

    </form>

    <?php
    //if(isset($_POST["btnsubmit"]))
    //echo "<img src='" . $img . $filename . "' alt='puttu'>";

    
    ?>
</body>
</html>