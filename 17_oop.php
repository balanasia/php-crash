<?php
    /* --- Object Oriented Programming -- */

    /*
    From PHP5 onwards you can write PHP 
    in either a procedural or object oriented way. 
    OOP consists of classes that can hold "properties" 
    and "methods". Objects can be created from classes.
    */

    // Properties are just variables that belong to a class.
    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes

    class User{
        //properties and attributes that belong to a class
        public $name;
        public $email;
        public $password;

        // The constructor is called whenever an object is created from the class.
        // We pass in properties to the constructor from the outside.

        public function __construct($name, $email, $password){
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
        }

        // Methods are functions that belong to a class.
        // function setName() {
        //   $this->name = $name;

        function set_name($name){
            $this -> name = $name;
        }

        //getter
        function get_name(){
            return $this->name;
        }

    }

    // instantiate a User object
    $user1 = new User('Luz Noceda', 'luz@hooty.com', 'Password123IhardlyKnowHer!');
    $user2 = new User('Amity Blight', 'amity@hooty.com', 'VeryStr0ngP@$$w0rd!123');

    echo $user2->email;


    /* ----------- Inheritence ---------- */

    /*
    Inheritence is the ability to create a new class from an existing class.
    It is achieved by creating a new class that extends an existing class.
    */

    class Employee extends User {
        //constructor for Employee class
        public function __construct($name, $email, $password, $title){
            parent::__construct($name, $email, $password);
        $this->title = $title;
        }

        public function getTitle(){
            return $this->title;
        }

    }

    $employee1 = new Employee("Sarah", "sarah@mail.com", "password123", "Manager");
    echo $employee1->getTitle();
?>