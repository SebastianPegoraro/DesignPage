<?php
class AyudaVistas{
    public function url($controller = CONTROLADOR_DEFECTO, $action = ACCION_DEFECTO){
        $urlString = "index.php?controller=".$controller."&action=".$action;
        return $urlString;
    }

    //Helpers para las vistas
}
?>