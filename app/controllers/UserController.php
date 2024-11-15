<?php

require_once '../app/models/User.php';
require_once '../app/models/Objetos.php';

class UserController {
    public function index() {

        $userModel = new User();

        if (isset($_POST['reg_user'])) {
            $reg_users = $userModel->regUser($_POST['email'], $_POST['password'], $_POST['nombre'], $_POST['apellido'], $_POST['tipo_usuario'], 1);
        }

        $users = $userModel->getAllUsers();

        $objetos = new Objetos();
        $all_objetos = $objetos->getAllObj();
        
        require_once '../app/views/user.php';
    }
}
