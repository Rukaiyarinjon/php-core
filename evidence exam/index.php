<?php
//step 2:

require_once("student_class.php");

if(isset($_POST["btnSubmit"])){
    $id=$_POST["txtId"];
    $name=$_POST["txtName"];
   

        $student=new Student($id,$name);
        $student->save();
        echo "Success!";
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
            ID:<br/>
            <input type="text" name="txtId"/><br>
</div>
<div>

    Name:<br/>
    <input type="text" name="txtName"/></br>

    <input type="submit" name="btnSubmit" value="Submit"/>

</div>
</form>

<?php
    Student::display_student();
?>


</body>
</html>