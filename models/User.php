<?php
class User {
    private $conn;
    private $table_name = "users";

    public $id;
    public $nome;
    public $email;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Listar todos os usuários
    public function getUsers() {
        $query = "SELECT id, nome, email FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
?>
