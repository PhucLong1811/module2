<?php 
interface Comparable
{
	public function compare($circleOne, $circleTwo);
}
class ComparableCircle implements Comparable
{
	public function compare($circleOne, $circleTwo)
	{
		$radiusOne = $circleOne->getRadius();
		$radiusTwo = $circleTwo->getRadius();

		if ($radiusOne > $radiusTwo) {
			return 1;
		}  else if($radiusOne < $radiusTwo) {
			return -1;
		} else {
			return 0;
		}
	}
}
$circleOne = new Circle("circleOne", 6);
$circleTwo = new Circle("circleTwo", 4);
$circleComparator = new CircleComparator();
var_dump($circleComparator->compare($circleOne, $circleTwo));
?>