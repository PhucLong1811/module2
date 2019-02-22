<?php 
interface Edible
{
	public function howToEat();
}
class Chicken extends Animal implements Edible
{
	public function makeSound()
	{
		return "Chicken: cluck-cluck!";
	}

	public function howToEat()
	{
		return "could be fried";
	}
}
echo ('---- Animals');
$animals[0] = new Tiger();
$animals[1] = new Chicken();

foreach ($animals as $animal) {
	echo $animal->makeSound(). '
	';
	if ($animal instanceof Chicken) {
		echo $animal->howToEat(). '
		';
	}
}
?>