<?php
// class fruit{


// }
// class drinks{
//     // properties
//     public $name="bmw1";
//     public $color="Red";

//     // method

//     functions info($name) {
//         $this->name=$name;
//         return $this->name."m";
//     }

//     // function get_name(){
//     // return $this-> name;

// // }
    
// }

// $apple = new drinks();
// $banana =new fruit();
// echo $apple->name;
// echo$apple->info('sadsa');


// class A{
//     protected $name = "rafi";
//     private $age = "22";
//     function info(){
//         $this->name=$name;
//         return;
//     }

// }

// $myObj=new A();
// echo $myObj->name;
// $my->age;
// echo $myObj->info("rafi");

interface student{
    public function show();
}
class batch implements student{
    function show(){
        echo "good morning";
    }
}


class B2 implements student{
    function show(){
        ech "hi everyone!";

    }
}
class B3 implements student{
    function show(){
        echo "Bye";
    }
}
?>