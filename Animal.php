<?php
    class Animal {
        public $cry = "";

        function bow() {
            echo $this->cry . PHP_EOL;
        }
    }

    class Dog extends Animal {
        public $cry = "bowbow!";
    }

    class Cat extends Animal {
        public $cry = "meowmeow!";
    }

    // $animal = new Animal();
    // $animal->cry = "meowmeow!";

    $dog = new Dog();
    $dog->bow();

    $cat = new Cat();
    $cat->bow();
?>