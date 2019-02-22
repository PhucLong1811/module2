<?php
abstract class Animal
{
    abstract public function makeSound();
}
class Tiger extends Animal
{
    public function makeSound()
    {
        return "Tiger: roarrrrr!";
    }
}
class Chicken extends Animal
{
    public function makeSound()
    {
        return "Chicken: cluck-cluck!";
    }
}
echo ('---- Animals<br>');
$animals[0] = new Tiger();
$animals[1] = new Chicken();

foreach ($animals as $animal) {
     echo $animal->makeSound(). '<br>';
}
