<?php 
include "interface.php";
class rectangle implements Resizeableb{
	private $long;
	private $width;
	public function setLong($new_long)
	{
		$this->long= $new_long;
	}
	public function setWidth($new_width)
	{
		$this->width=$new_width;
	}
	public function getArea()
	{
		return $this->long*$this->width;
	}
	public function resize($percent)
	{
		$this->long *=  sqrt($percent /100+1);
		$this->width *=  sqrt($percent /100+1);
	}
}
?>