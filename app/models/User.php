<?php
require_once 'Database.php';

class User {
    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    public function getAllUsers() {
        $stmt = $this->db->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function regUser($email, $pass, $nombre, $apellido, $tipo_user, $stat){
        $stmt = $this->db->query("INSERT INTO users(email, pass, nombre, apellido, tipo_user, stat)
                                  VALUES('".$email."', '".$pass."', '".$nombre."', '".$apellido."', '".$tipo_user."', '".$stat."')");
        return true;
    }
}
