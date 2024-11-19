<?php

    trait main{
        public function info(){
            echo "this is main class" . "<br>";

        }
    }

    class Child{
        use main;
        public function save(){
            echo "This is child class";
        }
    }
?>