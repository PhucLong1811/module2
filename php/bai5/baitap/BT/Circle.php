<?php 
include "interface.php";

class Circle implements Resizeableb{ 
	private $raDius;
	public function getRadius()
	{
		$this->raDius = $raDius;
	}
	public function setRadius($new_Radius)
	{
		$this->raDius = $new_Radius;
	}
	public function getArea()
	{
		return pi()*pow($this->raDius,2);
	}
	public function resize($percent)
	{
		$this->raDius *= sqrt($percent/100+1);
	}
}
?>