<?php 

	class TellALL{
		private $userAgent;

		public function __construct(){
			$this->userAgent=$_SERVER['HTTP_USER_AGENT'];
			echo $this->userAgent;
		}


	}

	$tellAll = new TellALL();

 ?>