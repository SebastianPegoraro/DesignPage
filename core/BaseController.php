<?php
class BaseController {

    public function __construct() {
        require_once 'Connect.php';
        require_once 'BaseEntity.php';
        require_once 'BaseModel.php';

        //Incluye todos los modelos
        foreach (glob("model/*.php") as $file) {
            require_once $file;
        }
    }

    //Plugins y Funcionalidades
    public function view($vista, $datos){
        foreach ($datos as $id_assoc => $value) {
            ${$id_assoc} = $value;
        }

        require_once 'core/ViewHelp.php';
        $helper = new viewHelp();

        require_once 'view/'.$vista.'View.php';
    }

    public function redirect($controller = CONTROLADOR_DEFECTO, $action = ACCION_DEFECTO){
        header("Location: index.php?controller=".$controller."&action=".$action);
    }

    //Metodos para los Controladores
}

?>