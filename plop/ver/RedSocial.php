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
		$text .= "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
		$text .= "<link rel='stylesheet' type='text/css' href='css/style.css'>";
		$text .= "<script src='http://code.jquery.com/jquery-3.2.1.min.js'></script>
		<script>
			alert('Bienvenido a tu muro!!');
			//codigo
			$(document).ready(function(){
				$('.miclase').css({
					'color': 'yellow',
					'font-size': '32pt',
					'font-family': 'Comics Sans',
					'border': '2px solid red'
				});
			$('.miclase').css('background-color','blue');
			$('#content').click(function(){
				$('#div1').fadeToggle('fast');
				$('#div2').fadeToggle('slow');
				$('#div3').fadeToggle(3000);
			});
			$('#foto').click(function(){
				$('#info').slideToggle('slow');
			});
			$('#agrandar').click(function(){
				$('#info').animate({					
					height: '+=150px',
					width: '+=150px'
				});
			});

			$('#reducir').click(function(){
				$('#info').animate({					
					height: '-=150px',
					width: '-=150px'
				});
			});
			
			$('#foto').mouseenter(function(){
				$('#foto').animate({					
					height: '+=300px',
					width: '+=300px',
					align: 'center'
				});
			});
			
			$('#foto').mouseleave(function(){
				$('#foto').animate({					
					height: '-=300px',
					width: '-=300px',
					align: 'center'
				});
			});
			$('#fb').click(function(){
				alert('Redireccionando a Facebook');
			});
			$('#fb').mouseenter(function(){
				$('#fb').animate({
					height: '+=100px',
					width: '+=100px',
					align: 'center'
				});
			});
			$('#fb').mouseleave(function(){
				$('#fb').animate({
					height: '-=100px',
					width: '-=100px',
					align: 'center'
				});
			});
			$('#twitter').click(function(){
				alert('Redireccionando a Twitter');
			});
			$('#twitter').mouseenter(function(){
				$('#twitter').animate({
					height: '+=100px',
					width: '+=100px',
					align: 'center'
				});
			});
			$('#twitter').mouseleave(function(){
				$('#twitter').animate({
					height: '-=100px',
					width: '-=100px',
					align: 'center'
				});
			});
			$('#gmail').click(function(){
				alert('Redireccionando a Gmail');
			});
			$('#gmail').mouseenter(function(){
				$('#gmail').animate({
					height: '+=100px',
					width: '+=100px',
					align: 'center'
				});
			});
			$('#gmail').mouseleave(function(){
				$('#gmail').animate({
					height: '-=100px',
					width: '-=100px',
					align: 'center'
				});
			});
		});
		</script>";
		$text .= "<link href='css/bootstrap.min.css' rel='stylesheet'>
	
				<script type='text/javascript' src= 'js/jquery.min.js'></script>
				<script type='text/javascript' src= 'js/bootstrap.js'></script>
	
				<style type='text/css'>
				.row{
					margin-bottom:18 px;
				}
				.show-grid [class^='col-'] {
					background-color: rgba(86,61,124,.15);
					border: 1px solid rgba(86,61,124,.2);
					padding: 5px;
					text-align:center;
				}
				</style>";
		$text .= "</head>'.'\n";
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
					"Amistades" => "amigos.php",
					"Compartir informacion" => "redesSociales.php");
		foreach( $links as $name => $link) {
			$text .= "<tr><td><div class='fakeButton'>
						<a href='$link'>".$name."</a>
						</div></td></tr>";
		}
		$text .= "</div>";
		$text .= "</table>";
		return $text;
	}	
}
?>