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
		class Shape{
			public $name;
			function __construct($name){
				$this->name = $name;
			}
			function show(){
				echo $this->name;
			}
		}
		/**
		 * summary
		 */
		class Rectangle extends Shape
		{
		    public $width;
		    public $height;
		    public function __construct($name,$width,$height)
		    {
		        parent::__construct($name);
		        $this->width=$width;
		        $this->height=$height;
		    }
		    public function calculateArea(){
		    	return $this->width*$this->height;
		    }
		    public function calulatePerimeter(){
		    	return ($this->width+$this->height)*2;
		    }
		}
	 ?>
</body>
</html>