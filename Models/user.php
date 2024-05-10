<?php
include_once __DIR__ . '/../app/config/db_crud.php';

class user
{
    static function login($data = [])
    {
        global $conn;
    
        $Email = $data['E-Mail'];
        $Password = $data['Password'];
    
        $result = $conn->query("SELECT * FROM users WHERE Email = '$Email' ");
        if ($result = $result->fetch_assoc()) {
            $hashedPassword = $result['Password'];
            $verify = password_verify($Password, $hashedPassword);
            if ($verify) {
                return $result;
            } else {
                return false;
            }
        }
    }
    
    static function register($data = [])
    {
        global $conn;

        $Email = $data['Email'];
        $Password = $data['Password'];
        $Confirm_password = $data['Confirm_password'];

        $hashedPassword = password_hash($Password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users SET Email = ?, Password = ?, Confirm_password = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sssss', $Email, $Password, $Confirm_password);
        $stmt->execute();

        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }

    static function getPassword($Email)
    {
        global $conn;
        $sql = "SELECT Password FROM users WHERE Email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $Email);
        $stmt->execute();

        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }
}
?>
