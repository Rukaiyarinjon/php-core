<?php
//$a =40;
//try{
    //if($a<30){
        //throw new Exception("Invalid Number");
    //}else{
        //throw new Exception("Valid number");
    //}
//}

//catch(Exception $e){
    //echo "Your error is:".$e->getMessage()."<br>";
//}
//finally{
    //echo "this is finally done";
//}


//$a =40;
//function multiple($a,$b){
    //return $a+$b;
//}
    
   // try{
       // echo multiple(5,2);
    //}
   // catch(Exception $error){
        //echo " Your error is:".$error->getMessage()."<br>";
   // }
    //finally{
        ///echo "<br>this is finally done";
   // }

   class MyException extends Exception{
    function_construct($language,$errorcode){
        $this->language = $language;
        $this->errorcode = $errorcode;
    }
    function getMessageMap(){
        $errors = file("errors/{$this->language}.txt");
        foreach($errors as $error){
            list($key,$value) = explode(",",$error,2);
            $errorArray[$key] = $value;
        }
        return $errorArray[$this->errorcode];
    }
   }




?>

