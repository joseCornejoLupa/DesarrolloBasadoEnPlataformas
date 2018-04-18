<?php
	include "RedSocial.php";
	include 'macs.php';
	
	class Index extends SchoolPage{
		public function printBody() {
			$name = returnNameFromMac();
			$text = "<h1>Bienvenido $name!</h1>";
			$text .= "<p style ='font-family:fontawesome'>";
			$text .=  "Si quieres encontrar informacion de estudiantes...";
			$text .=  "<br></br> si quieres saber opiniones de ellos...";
			$text .=  "<br></br> si quieres saber sus gustos...";
			$text .=  "<br></br> si crees que tienes algo que decir al mundo, este es tu lugar.";
			$text .=  "<br></br> Bienvenido al FeeDBaCK!";
			$text .=  "</p>";
			return $text;
		}
	}
	
	$index = new Index();
	$index->printPage();
?>
