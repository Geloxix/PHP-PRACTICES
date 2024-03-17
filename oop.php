<?php 
    class Developer {
        //public accessable globally
        //private only accessable inside the class
        //protected only accessable inside the class and the inheritance h
        public $name;
        public $title;
        public $age;

        //constructor a method that runs when the object is created
        public function __construct($name, $email, $age) {
            $this->name = $name;
            $this->title = $email;
            $this->age = $age;
        }

        //method is a function belongs to the class
        function set_name($name) {
            $this->name = $name;
        }
        //method
        function get_name () {
            return $this->name;
        }
    }
    //instantiation refers to the process of creating a specific instance of an object from a defined class.
    //instantiation
    $developer1 = new Developer('MA DA FA KA', 'Sernio Dev', 49);
    var_dump($developer1); echo '<br>';


    // Access object properties
    echo 'I am ' . $developer1->get_name() . '<br>';

    //Inheritance use to extend class
    class Employer extends Developer {
        public function __construct($name, $email, $age, $title) {
            parent::__construct($name, $email, $age);
            $this->title = $title;
        }   

        public function get_title() {
            return $this->title;
        }
    }

    $employer1 = new Employer('Shery', 'shery@gmaio.com', 49, 'Manager');
    var_dump($employer1); echo '<br>';
    
    echo $employer1->get_title();
?>      