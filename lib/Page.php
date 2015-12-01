<?php	
	class Page{

		private $header = <<<EOT
		<head>
        	<meta charset="UTF-8">
        	<title>Math Dice</title>
        	<!--Las tres lineas siguentes incorporan Bootstrap al proyecto -->
        	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        	<link rel="stylesheet" href="css/myStyle.css" type="text/css" />
        </head>
EOT;
		
		
	
		
		private $navBar = "";


		
		
		
	   	
		private $footer = <<<EOT
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
EOT;

		//Constructor.
		function __construct(){
			
		}

		//Getters & Setters.
		public function getheader(){
			return $this->header;
		}

		public function getnavBar(){
			return $this->navBar;
		}

		public function getFooter(){
			return $this->footer;
		}

		public function setHeader($string){
			$this->header = $string;
		}

		public function setNavBar($string){
			$this->navBar = $string;
		}

		public function setFooter($string){
			$this->footer = $string; 
		}

	}

?>