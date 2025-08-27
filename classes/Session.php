<?php
class Session {
    public static function start() {
        // Проверяем, что сессия еще не запущена
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }
    
    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }
    
    public static function get($key, $default = null) {
        return $_SESSION[$key] ?? $default;
    }
    
    public static function has($key) {
        return isset($_SESSION[$key]);
    }
    
    public static function remove($key) {
        unset($_SESSION[$key]);
    }
    
    public static function destroy() {
        session_destroy();
    }
    
    public static function setUser($user) {
        self::set('user_id', $user['id']);
        self::set('username', $user['username']);
        self::set('role', $user['role']);
        self::set('logged_in', true);
    }
    
    public static function isLoggedIn() {
        return self::get('logged_in', false);
    }
    
    public static function isAdmin() {
        return self::isLoggedIn() && self::get('role') === 'admin';
    }
    
    public static function getUserId() {
        return self::get('user_id');
    }
    
    public static function getUsername() {
        return self::get('username');
    }
    
    public static function logout() {
        self::destroy();
    }
    
    public static function setFlash($type, $message) {
        self::set('flash_' . $type, $message);
    }
    
    public static function getFlash($type) {
        $message = self::get('flash_' . $type);
        self::remove('flash_' . $type);
        return $message;
    }
}
?> 