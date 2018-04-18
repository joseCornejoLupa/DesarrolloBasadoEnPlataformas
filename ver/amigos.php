<?php
	include "RedSocial.php";
	
	class Amigos extends SchoolPage{
		public function printBody() {
			$text = "<button type='button' id='content'>Aparecer/Desaparecer datos!</button>
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
							<th>Juan Perez</th>
							<th><img src='juanPerez.jpg' alt = 'juanPerez' width = '200' height='142'></img></th>
							<th>Ingieneria industrial</th>
							<th>Estudiante de pregrado, <br></br> integrante del coro de la universidad.</th>
							<th><img src='dedoAbajo.gif' alt = 'OK' style='width:170px;height:100px;'></img></th>
						</tr>
						<tr>
							<th>Pedro Tapia</th>
							<th><img src='pedroTapia.jpg' alt = 'pedroTapia' width= '200' height='142'></img></th>
							<th>Derecho</th>
							<th>Estudiante de pregrado,<br></br> aficionado a los videojuegos<br></br> defiende su punto de vista.</th>
							<th><img src='dedoArriba.gif' alt = 'OK' style='width:170px;height:100px;'></img></th>
						</tr>

					</table>
					</div>";
			return $text;
		}
	}
	
	$amigos = new Amigos();
	$amigos->printPage();
?>
