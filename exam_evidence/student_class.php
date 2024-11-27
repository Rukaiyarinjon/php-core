<?php
class Student{
    private $id;
    private $name;
    private $batch;

    private static $file_path="storing.txt";



    //......constructor..........//

    function __construct($_id,$_name,$_batch){
        $this->id=$_id;
        $this->name=$_name;
        $this->batch=$_batch;
    }


    //.....csv function....//

    public function CSV(){

       return $this->id. "," . $this->name . ",". $this->batch .PHP_EOL;//END OF LINE OR CREATE NEW LINE

    }

    //......Save Function....//

    public function save(){

        $students=file(self::$file_path);

        //....the file() reads a file into an array.

        file_put_contents(self::$file_path,$this->CSV(),FILE_APPEND);

        //File_put_contains() writes data to a file.
        // Use FILE_APPEND to avoid deleting the existing content of the file.

    } //end save



    //...display Function....//

    public static function result_students(){

        $students=file(self::$file_path);

        echo "<b>ID | Name | Batch</b></br>";
        foreach($students as $student){
            list($id, $name, $batch)= explode(",",trim($student));
            echo "$id | $name | $batch</br>";
        }

    }




}


?>
