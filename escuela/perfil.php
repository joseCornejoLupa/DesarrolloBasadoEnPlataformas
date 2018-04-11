<?php
include 'PageTemplate.php';
abstract class Perfil extends PageTemplate{
		public function Perfil( $newTitle='',$newAuthor = 'Pedro Tapia') {
		$this->title = $newTitle;
		$this->author = $newAuthor;
	}
	
}
>