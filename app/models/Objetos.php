<?php
require_once 'Database.php';

class Objetos {
    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    public function getAllObj() {
        $stmt = $this->db->query("SELECT o.id, o.code_obj, o.descripcion, t.descripcion as tipo_objeto FROM objetos o inner join tipos_obj t on o.tipo_objeto = t.id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllTipoObj() {
        $stmt = $this->db->query("SELECT * FROM tipos_obj WHERE stat = 1");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function regTipoObj($regTipoObj){
        $stmt = $this->db->query("INSERT INTO tipos_obj(descripcion, stat)VALUES('".$regTipoObj."', 1)");
        return true;
    }

    public function regObj($codigo, $descripcion, $objeto){
        $stmt = $this->db->query("INSERT INTO objetos(code_obj, descripcion, tipo_objeto)VALUES('".$codigo."', '".$descripcion."', '".$objeto."')");
        return true;
    }
}
