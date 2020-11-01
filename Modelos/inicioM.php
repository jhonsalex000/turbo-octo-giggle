<?php

require_once "ConexionBD.php";

class InicioM extends ConexionBD{

	//Ver Ajustes Generales
	static public function VerGeneralesM($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT id, favicon, titular, logotipo FROM $tablaBD");

		$pdo -> execute();

		return $pdo -> fetch();

		$pdo -> close();
		$pdo = null;

	}


	//Editar Ajustes Generales
	static public function EditarGeneralesM($tablaBD, $id){

		$pdo = ConexionBD::cBD()->prepare("SELECT id, favicon, titular, logotipo FROM $tablaBD WHERE id = :id");

		$pdo -> bindParam(":id", $id, PDO::PARAM_INT);

		$pdo -> execute();

		return $pdo -> fetch();

		$pdo->close();
		$pdo = null;

	}



	//Actualizar Ajustes Generales
	static public function ActualizarGeneralesM($tablaBD, $datosC){

		$pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET favicon = :favicon, titular = :titular, logotipo = :logotipo WHERE id = :id");

		$pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_INT);
		$pdo -> bindParam(":favicon", $datosC["favicon"], PDO::PARAM_STR);
		$pdo -> bindParam(":titular", $datosC["titular"], PDO::PARAM_STR);
		$pdo -> bindParam(":logotipo", $datosC["logotipo"], PDO::PARAM_STR);

		if($pdo -> execute()){
			return true;
		}

		$pdo -> close();
		$pdo = null;

	}


}