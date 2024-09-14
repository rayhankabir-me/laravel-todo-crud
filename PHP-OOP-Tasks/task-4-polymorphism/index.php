<?php

interface Animal {
    public function makeSound();
}

class Cat implements Animal {
    public function makeSound()
    {
        echo "Cat's Sound: Meow, Meow!" . "<br>";
    }
}

class Dog implements Animal {
    public function makeSound()
    {
        echo "Dog's Sound: Ghew, Ghew!" . "<br>";
    }
}

class Cow implements Animal {
    public function makeSound()
    {
        echo "Cow's Sound: Hamba, Hamba!";
    }
}

$cat = new Cat();
$dog = new Dog();
$cow = new Cow();

$animals = array($cat, $dog, $cow);

foreach ($animals as $animal)
{
    $animal->makeSound();
}