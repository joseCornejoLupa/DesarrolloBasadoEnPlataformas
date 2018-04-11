<?php
	include "redSocial.php";
	include 'macs.php';
	
	class Red extends RedSocial{
		public function printBody(){
			$text = "<body>
		<div class = 'titulos'>
			<h1> Muro </h1>
		</div>
		<hr></hr>
		<p style ='font-family:fontawesome'>
			Si quieres encontrar informacion de estudiantes...
			<br></br> si quieres saber opiniones de ellos...
			<br></br> si quieres saber sus gustos...
			<br></br> si crees que tienes algo que decir al mundo, este es tu lugar.
			<br></br> Bienvenido al FeeDBaCK!
		</p>
		<button type='button' id='content'>Aparecer/Desaparecer datos!</button>
		<div class = 'titulos'>
			<h1> Tus amigos </h1>
		</div>
		<div id='div1'>
			<hr></hr>
		<button type='button' id='agrandar'>Agrandar la informacion</button>
		<button type='button' id='reducir'>Reducir la informacion</button>
		<style>
			table {
    			font-family: arial, sans-serif;
    			border-collapse: collapse;
    			width: 100%;
			}

			td, th {
				border: 1px solid #dddddd;
				text-align: left;
				padding: 8px;
			}

			tr:nth-child(even) {
				background-color: #dddddd;
			}
		</style>
		<table id='info'>
			<tr>
				<th>Nombre</th>
				<th>Foto</th>
				<th>Carrera</th>
				<th>Formacion estudiantil</th>
				<th>Apreciacion personal</th>
			</tr>
			<tr>
				<th>< ></th>
				<th><img src='imgs/juanPerez.jpg' alt = 'juanPerez' width = '200' height='142'></img></th>
				<th>Ingieneria industrial</th>
				<th>Estudiante de pregrado, <br></br> integrante del coro de la universidad.</th>
				<th><img src='imgs/DedoAbajo.gif' alt = 'OK' style='width:170px;height:100px;'></img></th>
			</tr>
			<tr>
				<th><?php $author ?></th>
				<th><img src='imgs/pedroTapia.jpg' alt = 'pedroTapia' width= '200' height='142'></img></th>
				<th>Derecho</th>
				<th>Estudiante de pregrado,<br></br> aficionado a los videojuegos<br></br> defiende su punto de vista.</th>
				<th><img src='imgs/dedoArriba.gif' alt = 'OK' style='width:170px;height:100px;'></img></th>
			</tr>

		</table>
		</div>
		
		<h2>
			Compartir informacion mediante:
		</h2>
		<a href = 'https://www.facebook.com/' target = '_blank'>
			<img src = 'imgs/logoFb.png' alt = 'logo de FB' style = 'width:42px;height:42px;border:0;' id= 'fb'></img>
		</a>
		<a href = 'https://www.twitter.com/' target = '_blank'>
			<img src = 'imgs/twitter.png' alt = 'logo de twitter' style = 'width:42px;height:42px;border:0;' id= 'twitter'></img>
		</a>
		<a href = 'https://www.google.com/gmail/about/' target = '_blank'>
			<img src = 'imgs/gmail.png' alt = 'logo de gmail' style = 'width:42px;height:42px;border:0;' id= 'gmail'></img>
		</a>
	</body>";
			return $text;
		}
	}
	$red = new Red();
	$red->printPage();
?>
