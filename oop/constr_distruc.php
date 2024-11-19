<?php

    // class Car{
    //     public $name="M";
    //     public $model="01";

    //     function __destruct(){
    //         echo "<br>bye";
    //     }

    //     function __construct(){
    //         echo "this is construct function";
    //     }
    //     public function info(){
    //         echo "this is info method";
    //     }
    // }
    // $newObj= new Car();
    // echo "<br>";
    // $newObj->info();
    // echo "<br>";


    // class Bike extends Car{
    //     public $color="red";
    //      public function details(){
    //         echo "this is child method";
    //      }
    // }

    // $bikeObj= new Bike();
    // $bikeObj->details();
    //  echo "<br>";
    //  echo $bikeObj->color;
    //  echo "<br>";

    //  echo $bikeObj->name;
    //  echo "<br>";



// argument pass:


    //  class Car{
    //     public $name;
    //     public $model="01";


    //     // constructor with a parameter

    //     function __construct($name){
    //         echo "this is construct function";
    //         $this->name=$name;
            
    //     }

    //     // destructor
        
    //     function __destruct(){
    //         echo "<br>bye";
    //     }

    //     // info method

    //     public function info(){
    //         echo "this is info method";
    //     }
    // }

    // $newObj= new Car("toyota");
    // echo "<br>";
    // $newObj->info();
    // echo "<br>";

    // // class Bike extends that Car

    // class Bike extends Car{
    //     public $color="red";

    //     // details method that takes a name

    //      public function details($name){
    //         echo "this is child method";
    //         $this->name= $name;
    //      }
    // }

    // $bikeObj= new Bike("honda");
    // $bikeObj->details("yamaha");
    //  echo "<br>";
    //  echo $bikeObj->color;
    //  echo "<br>";

    //  echo $bikeObj->name;
    //  echo "<br>";


    //  scop resulation operator

    class User {
        public static $name="hello world!" . "<br>";


        // $person = new user;

    }
    
    echo User :: $name;
    echo User :: $name ="my world";

    // echo $person->name="my world";


?>