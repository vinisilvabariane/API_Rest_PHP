<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/API_Rest_PHP/db.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/API_Rest_PHP/models/User.php";

class UserController {
    private $db;
    private $conn;

    public function __construct() {
        $this->db = new Database();
        $this->conn = $this->db->getConnection();
    }

    public function getUsers() {
        $query = "SELECT * FROM users";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($users);
    }
}

$controller = new UserController();
$controller->getUsers();
