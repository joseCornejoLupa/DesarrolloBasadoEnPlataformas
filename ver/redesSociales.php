<?php
	include "RedSocial.php";
	
	class RedesSociales extends SchoolPage{
		public function printBody() {
			$text = "<h2>
						Compartir informacion mediante:
					</h2>
					<a href = 'https://www.facebook.com/' target = '_blank'>
						<img src = 'logoFb.png' alt = 'logo de FB' style = 'width:42px;height:42px;border:0;' id= 'fb'></img>
					</a>
					<a href = 'https://www.twitter.com/' target = '_blank'>
						<img src = 'twitter.png' alt = 'logo de twitter' style = 'width:42px;height:42px;border:0;' id= 'twitter'></img>
					</a>
					<a href = 'https://www.google.com/gmail/about/' target = '_blank'>
						<img src = 'gmail.png' alt = 'logo de gmail' style = 'width:42px;height:42px;border:0;' id= 'gmail'></img>
					</a>";
			return $text;
		}
	}
	
	$compartir = new RedesSociales();
	$compartir->printPage();
?>
