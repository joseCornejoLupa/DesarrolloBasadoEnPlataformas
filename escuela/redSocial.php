<?php
include 'PageTemplate.php';

abstract class redSocial extends PageTemplate{
	
	public function redSocial( $newTitle='',$newAuthor = 'Jose Cornejo') {
		$this->title = $newTitle;
		$this->author = $newAuthor;
	}
	
	public function printHeader(){
		$text = "<head>"."\n";
		$text .= '<title>'.$this->title.'</title>'."\n";
		$text .= "<link rel='stylesheet' type='text/css' href='css/style.css'>";
		$text .= '</head>'."\n";
		return $text;
	}
	
	public function printFooter(){
		$text = "<div class='clear'></div>";
		$text .= "<hr>";
		$text .= "<center> <h1>".$this->author."</h1> </center>";
		return $text;
	}
	
	public function printMenu(){
		$text = "<table>";
		$links = array(
					"MENU" => '#', 
					"Home" => "index.php", 
					"Consulta" => "consulta.php",
					"Notas"=>"notas.php",
					"Red Social!!" =>"primerProyecto2.0.html");
		foreach( $links as $name => $link) {
			$text .= "<tr><td><div class='fakeButton'>
						<a href='$link'>".$name."</a>
						</div></td></tr>";
		}
		$text .= "</table>";
		return $text;
	}	
}
?>