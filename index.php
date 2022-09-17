<?php
include "controlador/plantilla.controlador.php";

include "controlador/dbproduccion.controlador.php";
include "controlador/roles.controlador.php";

include "modelo/dbproduccion.modelo.php";
include "modelo/db2017.modelo.php";


$plantilla = new ControladorPlanilla();
$plantilla->ctrPlantilla();