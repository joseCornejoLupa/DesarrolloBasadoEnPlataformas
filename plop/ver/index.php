<?php
	include "RedSocial.php";
	include 'macs.php';
	
	class Index extends RedSocial{
		public function printBody() {
			$name = returnNameFromMac();
			$text = "<div class='container'>";
			$text .= "<div class='row show-grid'>";
			$text .= "<div class='col-md-4'>";
			$text .= "<h1>Bienvenido $name!</h1>";
			$text .= "</div>";
			$text .= "<p style ='font-family:fontawesome'>";
			$text .= "<div class='col-md-1'>";
			$text .=  "Si quieres encontrar informacion de estudiantes...";
			$text .= "</div>";
			$text .= "<div class='col-md-1'>";
			$text .=  "<br></br> si quieres saber opiniones de ellos...";
			$text .= "</div>";
			$text .= "<div class='col-md-1'>";
			$text .=  "<br></br> si quieres saber sus gustos...";
			$text .= "</div>";
			$text .= "<div class='col-md-1'>";
			$text .=  "<br></br> si crees que tienes algo que decir al mundo, este es tu lugar.";
			$text .= "</div>";
			$text .= "<div class='col-md-1'>";
			$text .=  "<br></br> Bienvenido al FeeDBaCK!";
			$text .= "</div>";
			$text .=  "</p>";
			$text .= "</div>";
			$text .= "</div>";
			return $text;
		}
	}
	
	$index = new Index();
	$index->printPage();
?>
