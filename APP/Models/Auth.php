<?php


namespace APP\Models;

use PDO;

class Auth
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function auth($login, $password)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM users 
                    WHERE login = :login');
        $stmt->execute([
            'login' => $login,
        ]);

        $user = $stmt->fetch();

        if ($user) {
            if (password_verify($password, $user->password)) {
                return $user;
            }
        }
        return false;
    }

    public function register($id_user, $login, $password, $role)
    {
        if ($this->auth($login, $password)) {
            return -1;
        }
        $stmt = $this->pdo->prepare('INSERT INTO users (id_user, login, password, role) 
            VALUES (:id_user, :login, :password, :role)');
        $stmt->execute([
            'id_user' => $id_user,
            'login' => $login,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'role' => $role,
        ]);
        return $this->pdo->lastInsertId();

    }

    public function find($id_user)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM users WHERE id_user=:id_user');
        $stmt->execute(['id_user' => $id_user]);
        return $stmt->fetch();
    }
}