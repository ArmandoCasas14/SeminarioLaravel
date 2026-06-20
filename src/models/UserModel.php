<?php
require_once __DIR__ . '/../config/Database.php';

class UserModel {
    private $db;

    public function __construct() {
        // Obtenemos la conexión única
        $this->db = Database::getInstance()->getConnection();
    }

    // Obtener todos los usuarios
    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM users ORDER BY id DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Obtener usuario por ID
    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Crear un nuevo usuario
    public function create($nombre, $email) {
        $stmt = $this->db->prepare("INSERT INTO users (nombre, email) VALUES (?, ?)");
        return $stmt->execute([$nombre, $email]);
    }

    // Eliminar usuario (RETO)
    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM users WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>