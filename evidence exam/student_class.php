<?php
// step 1:

class Student{
    private $id;
    private $name;

    private static $file_path="data.txt";

    // .........constructor...//

    function __construct($_id,$_name){
        $this->id=$_id;
        $this->name=$_name;
    }

    


    // .......save function.......//

    public function save(){

        $student=file(self::$file_path);
        // the file() reads a file into an array.
        file_put_contents(self::$file_path,$this->csv(),FILE_APPEND);
    
        // this file_put_contents() writes data to file.
        // use FILE_APPEND to avoid deleting the existing content of the file.
    
    } //end save


    // ......csv function....//

    public function csv(){
        return $this->id.",".$this->name.PHP_EOL;
    }


    //....display_student....//


    public static function display_student(){
        $students=file(self::$file_path);

        echo "<b>ID | Name</b><br/>";
        foreach($students as $student){
            list($id,$name)=explode(",",trim($student));
            echo "$id | $name<br/>";
        }
    }
} 




?>