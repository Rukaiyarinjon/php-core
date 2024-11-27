<?php
require_once("student_class.php");

if(isset($_POST["btnSubmit"])){
    $id=$_POST["txtID"];
    $name=$_POST["txtName"];
    $batch=$_POST["txtBatch"];


    $student=new Student($id,$name,$batch);
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

    <style>
        .formst{
            width: 30%;
             border: 2px solid black;
             height: 200px;
             padding: 30px;
            background-color: pink;
            margin-top: 50px;
        }

    </style>
</head>
<body>
    <form type="text" method="post" class="formst">
        <div>
            ID:<br>
            <input type="text" name="txtID" />
        </div>
        <div>
            Name:<br>
            <input type="text" name="txtName" />
        </div>

        <div>
            Batch:<br>
            <input type="text" name="txtBatch" />
        </div>

        <div>
            <input type="Submit" name="btnSubmit" value="Submit" />
    </div>
</form>
<?php

Student::result_students();
?>

</body>
</html>