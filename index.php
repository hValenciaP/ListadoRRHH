<?php
include "controlador/plantilla.controlador.php";

include "controlador/produccion.controlador.php";
include "controlador/roles.controlador.php";

include "modelo/produccion.modelo.php";
include "modelo/roles.modelo.php";


$plantilla = new ControladorPlanilla();
$plantilla->ctrPlantilla();