<?php 
include_once("bd.php");
class menu extends bd{
	var $tabla="menu";
	function mostrarMenu($Nivel){
		$this->campos=array("*");
		switch ($Nivel) {
			case 1:{return $this->getRecords("superadmin=1 and activo=1","orden");}break;
			case 2:{return $this->getRecords("director=1 and activo=1","orden");}break;
			case 3:{return $this->getRecords("jefeunidad=1 and activo=1","orden");}break;
			case 4:{return $this->getRecords("supervisor=1 and activo=1","orden");}break;
			case 5:{return $this->getRecords("gestion=1 and activo=1","orden");}break;
			case 6:{return $this->getRecords("ventanilla=1 and activo=1","orden");}break;
			case 7:{return $this->getRecords("correspondencia=1 and activo=1","orden");}break;
		}
	}
}
?>