<?php 

require_once '../app/models/Objetos.php';

class ObjetosController {
    public function index() {
        $objModel = new Objetos();
        if (isset($_POST['reg_tipo_obj'])) {
            $reg_tipo = $objModel->regTipoObj($_POST['tipo_obj']);  
        }
        if (isset($_POST['reg_obj'])) {
            $reg_obj = $objModel->regObj($_POST['codigo'], $_POST['descripcion'], $_POST['objeto']);  
        }
        $objetos = $objModel->getAllObj();
        $tipo_obj = $objModel->getAllTipoObj();

        require_once '../app/views/objetos.php';
    }
}
