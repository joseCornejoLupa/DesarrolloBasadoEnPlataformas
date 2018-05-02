<?php
	include "RedSocial.php";
	
	class RedesSociales extends RedSocial{
		public function printBody() {
			$text = "<div class='container'>";
			$text .= "<div class='row show-grid'>";
			$text .= "<div class='col-md-4'>";
			$text .= "<h2>
						Compartir informacion mediante:
					</h2>
					</div>
					<div class='col-md-2'>
					<a href = 'https://www.facebook.com/' target = '_blank'>
						<img src = 'imgs/logoFb.png' alt = 'logo de FB' style = 'width:42px;height:42px;border:0;' id= 'fb'></img>
					</a>
					</div>
					<div class='col-md-2'>
					<a href = 'https://www.twitter.com/' target = '_blank'>
						<img src = 'imgs/twitter.png' alt = 'logo de twitter' style = 'width:42px;height:42px;border:0;' id= 'twitter'></img>
					</a>
					</div>
					<div class='col-md-2'>
					<a href = 'https://www.google.com/gmail/about/' target = '_blank'>
						<img src = 'imgs/gmail.png' alt = 'logo de gmail' style = 'width:42px;height:42px;border:0;' id= 'gmail'></img>
					</a>
					</div>";
			$text .= "</div>";
			$text .= "</div>";
			return $text;
		}
	}
	
	$compartir = new RedesSociales();
	$compartir->printPage();
?>
