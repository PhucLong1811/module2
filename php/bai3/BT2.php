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
	class StopWatch {
		private $startTime;
		private $endTime;

		public function StopWatch (){
			$this->startTime = date('Y-m-d h:i:sa');

		}

		public function get_startTime(){
			return  $this->startTime;
		}
		public function get_endTime() {
			return $this->endTime;
		}
		public  function  start() {
			$this->startTime = date('Y-m-d h:i:sa');
		}
		public  function stop() {
			$this->endTime = date('Y-m-d h:i:sa');
		}
		public  function getElapsedTime() {
			return  $this->endTime - $this->startTime;
		}
	}
	$Obj = new StopWatch();
	echo $Obj->get_startTime();
	$Obj->stop();
	echo $Obj->getElapsedTime();
	?>
</body>
</html>