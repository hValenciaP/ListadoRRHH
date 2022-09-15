<?php 

class ctrPersonal{
	static public function ctrMostrarListadoProduccion(){
		$resultado=mdlPersonal::mdlMostrarListadoProduccion();
		return $resultado; 
		require_once "paginas/produccion";
	   }
	}
