<?php

include 'pageTemplate.php';

abstract class SchoolPage extends PageTemplate{
	
	public function SchoolPage( $newTitle='', $newAuthor = '') {
		$this->title = $newTitle;
		$this->author = $newAuthor;
	}
	
	public function printHeader(){
		$text = "<head>"."\n";
		$text .= "<title>'.$this->title.'</title>'.'\n";
		$text .= "<link rel='stylesheet' href='css/style.css'>";
		$text .= "<script src='http://code.jquery.com/jquery-3.2.1.min.js'></script>";
		$text .= "<script>
				alert('Bienvenido a tu muro!!');
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
		$text .= '</head>'."\n";
		return $text;
	}
	
	public function printFooter(){
		$text = "<div class='clear'></div>";
		$text .= "<hr>";
		$text .= "<center> <h1>".$author."</h1> </center>";
		return $text;
	}
	
	public function printMenu(){
		$text = "<table>";
		$links = array(
					"Muro" => "index.php", 
					"Amigos" => "amigos.php",
					"Compartir información"=>"redesSociales.php");
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
