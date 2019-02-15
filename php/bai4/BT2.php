<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
	class Point2D{
		private $x;
		private $y;
		function Point2D(){
			$this->x=0;
			$this->y=0;
		}
		function getx(){
			return $this->x;
		}
		function gety(){
			return $this->y;
		}
		function getxy(){
			$arrayXY = array($this->x,$this->y);
			return $arrayXY;
		}
		function setx($x){
			$this->x=$x;
		}
		function sety($y){
			$this->y=$y;
		}
		function setxy($_x,$_y){
			$this->x=$_x;
			$this->y=$_y;
		}
		function toString(){
			echo "X và Y";
		}
	}
	$Point2D = new Point2D();
	$Point2D->toString();
	echo '<br>';
	echo $Point2D->getx()." ".$Point2D->gety();
	echo '<br>';
	echo $Point2D->setx(4);
	echo $Point2D->sety(8);
	echo $Point2D->getx()." ".$Point2D->gety();
	echo '<br>';
	echo $Point2D->setxy(6,10);
	print_r($Point2D->getxy());

	class Point3D extends Point2D
	{
		public $z;
		function Point3D()
		{
			parent::Point2D($x,$y);			
			$this->z=0;
		}
		function getz(){
			return $this->z;
		}
		function set($z){
			$this->z=$z;
		}
	/*	function getxyz(){
			$arrayXYZ = array(parent::getx(),parent::gety(),$this->z);
			return $arrayXYZ;
		}
		function setxyz($_z){
			$this->z=$_z;
		}*/
		function toString(){
			echo 'X Y và Z';
		}
	}
	$Point3D = new Point3D();
	$Point3D->toString();
	echo '<br>';
	echo $Point3D->getx()." ".$Point3D->gety()." ".$Point3D->getz();
	echo '<br>';

	?>
</body>
</html>