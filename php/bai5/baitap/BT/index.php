<?php 
include "Circle.php";
include "Rectangle.php";
$new_circle = new Cirle();
$new_circle->setRadius(5);
echo "$percent %". $new_circle->getArea()."<br>";
for ($i = 0; $i < 3; $i++) {
	$percent - mt_rand(1,100);
	$new_circle->resize($percent);
	echo '$percent % :'.$new_circle->getArea()."<br>";
}
?>