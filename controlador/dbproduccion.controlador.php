<?php 

class ctrPersonal{
	static public function ctrMostrarListadoProduccion(){
		$resultado=mdlPersonal::mdlMostrarListadoProduccion();
		return $resultado; 
		require_once "paginas/produccion";
	   }

	   static public function ctrMostrarListado2017(){
		$resultado=mdlPersonal::mdlMostrarListado2017();
		return $resultado; 
		require_once "paginas/produccion";
	   }
	}
