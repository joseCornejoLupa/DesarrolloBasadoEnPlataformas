<?php
	include "RedSocial.php";
	
	class Amigos extends RedSocial{
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
					</style>";
			$text .= "<div class='container'>";
			$text .= "<div class='row show-grid'>";	
			$text .="<table id='info'>";
			$text .= "<div class='col-md-1'>
						<tr>
							<th>Nombre</th>
							<th>Foto</th>
							<th>Carrera</th>
							<th>Formacion estudiantil</th>
							<th>Apreciacion personal</th>
						</tr>
					</div>
					<div class='col-md-1'>
						<tr>
							<th>Juan Perez</th>
							<th><img src='imgs/juanPerez.jpg' alt = 'juanPerez' width = '200' height='142'></img></th>
							<th>Ingieneria industrial</th>
							<th>Estudiante de pregrado, <br></br> integrante del coro de la universidad.</th>
							<th><img src='imgs/dedoAbajo.gif' alt = 'OK' style='width:170px;height:100px;'></img></th>
						</tr>
					</div>
					<div class='col-md-1'>
						<tr>
							<th>Pedro Tapia</th>
							<th><img src='imgs/pedroTapia.jpg' alt = 'pedroTapia' width= '200' height='142'></img></th>
							<th>Derecho</th>
							<th>Estudiante de pregrado,<br></br> aficionado a los videojuegos<br></br> defiende su punto de vista.</th>
							<th><img src='imgs/dedoArriba.gif' alt = 'OK' style='width:170px;height:100px;'></img></th>
						</tr>
					</div>
					</table>
					</div>";
			$text .= "</div>";
			$text .= "</div>";
			return $text;
		}
	}
	
	$amigos = new Amigos();
	$amigos->printPage();
?>
