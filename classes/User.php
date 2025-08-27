<?php
require_once 'config/database.php';

class User {
    private $db;
    
    public function __construct() {
        $this->db = new Database();
    }
    
    public function register($username, $email, $password, $fullName) {
        // Проверка на существование пользователя
        if ($this->getUserByEmail($email) || $this->getUserByUsername($username)) {
            return false;
        }
        
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO users (username, email, password, full_name, created_at) VALUES (?, ?, ?, ?, NOW())";
        return $this->db->insert($sql, [$username, $email, $hashedPassword, $fullName]);
    }
    
    public function login($login, $password) {
        $user = $this->getUserByEmailOrUsername($login);
        
        if ($user && password_verify($password, $user['password'])) {
            // Обновляем last_login
            $this->updateLastLogin($user['id']);
            return $user;
        }
        
        return false;
    }
    
    public function getUserById($id) {
        $sql = "SELECT * FROM users WHERE id = ?";
        return $this->db->fetch($sql, [$id]);
    }
    
    public function getUserByEmail($email) {
        $sql = "SELECT * FROM users WHERE email = ?";
        return $this->db->fetch($sql, [$email]);
    }
    
    public function getUserByUsername($username) {
        $sql = "SELECT * FROM users WHERE username = ?";
        return $this->db->fetch($sql, [$username]);
    }
    
    public function getUserByEmailOrUsername($login) {
        $sql = "SELECT * FROM users WHERE email = ? OR username = ?";
        return $this->db->fetch($sql, [$login, $login]);
    }
    
    public function updateProfile($userId, $data) {
        $fields = [];
        $values = [];
        
        foreach ($data as $key => $value) {
            if (in_array($key, ['username', 'email', 'full_name', 'phone', 'company'])) {
                $fields[] = "$key = ?";
                $values[] = $value;
            }
        }
        
        if (empty($fields)) return false;
        
        $values[] = $userId;
        $sql = "UPDATE users SET " . implode(', ', $fields) . " WHERE id = ?";
        
        return $this->db->query($sql, $values);
    }
    
    public function updatePassword($userId, $newPassword) {
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        return $this->db->query($sql, [$hashedPassword, $userId]);
    }
    
    private function updateLastLogin($userId) {
        $sql = "UPDATE users SET last_login = NOW() WHERE id = ?";
        $this->db->query($sql, [$userId]);
    }
    
    public function createTables() {
        $sql = "CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(50) UNIQUE NOT NULL,
            email VARCHAR(100) UNIQUE NOT NULL,
            password VARCHAR(255) NOT NULL,
            full_name VARCHAR(100) NOT NULL,
            phone VARCHAR(20),
            company VARCHAR(100),
            role ENUM('user', 'admin') DEFAULT 'user',
            avatar VARCHAR(255),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            last_login TIMESTAMP NULL,
            is_active BOOLEAN DEFAULT TRUE
        )";
        
        return $this->db->query($sql);
    }
}
?> 