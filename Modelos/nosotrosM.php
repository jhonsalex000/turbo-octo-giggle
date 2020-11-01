<?php

require_once "ConexionBD.php";

class NosotrosM extends ConexionBD{

	static public function VerNosotrosM($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT id, titulo, introduccion, descripcion, imagen FROM $tablaBD");

		$pdo -> execute();

		return $pdo ->fetch();

		$pdo -> close();

	}

}