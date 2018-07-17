<?php
//Configuracion global
require_once 'config/global.php';

//Base para los controladores
require_once 'core/BaseController.php';

//Funciones para el controlador frontal
require_once 'core/ControladorFrontal.fun.php';

//Cargamos controladores y acciones
if (isset($_GET["controller"])) {
    $controllerObj = cargarControlador($_GET["controller"]);
    lanzarAccion($controllerObj);
} else {
    $controllerObj = cargarControlador(CONTROLADOR_DEFECTO);
    lanzarAccion($controllerObj);
}
?>