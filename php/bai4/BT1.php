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
		class Cirle{
			public $radius;
			public $color;
			public function __construct($radius,$color){
				$this->radius=$radius;
				$this->color=$color;
			}
			function area(){
				return (pow($this->radius,2)*pi());
			}
			function toString(){
				echo "Bán kinh".$this->radius."Có màu".$this->color."<br> diện tích".$this->area()."<br>";
			}
		}
		$test=new Cirle(4,"xanh");
		$test->toString();

		class Cylinder extends Cirle
		{
		    public $height;
		    public function __construct($height,$radius,$color)
		    {
		      parent::__construct($radius,$color);
		      $this->height=$height; 
		    }
		    function volume(){
		    	return (($this->height)*pi()*pow($this->radius,2));
		    }
		    function toString(){
				echo "Bán kinh".$this->radius."Có màu".$this->color."<br> thể tích".$this->volume();
			}
		}
		$test=new Cylinder(20,8,"đỏ");
		$test->toString();
	 ?>
</body>
</html>