<?php

    class user {

        public $name;
        public $age;

        function __construct($name,$age){
           $this->name = $name;
           $this->age = $age;
        
        }
    }

    $user1 = new user ('niran',19);

    echo $user1->name.' is '.$user1->age.' years  ';


?>