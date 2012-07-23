<?php
class A_controller{
	function __construct(){
		echo "construct";
	}

	/**
	* Permet de charger et creer les variables de titre.
	* @param $data qui retourne un tableau
	*/

	public function load($data){
		$title = $data['title'];
		$css = $data['css'];
		return $title;
	}
}