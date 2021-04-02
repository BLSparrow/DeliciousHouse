<?php


namespace APP\Models;

use PDO;

class Country
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function addCountry($data)
    {
        $stmt = $this->pdo->prepare('INSERT INTO countries(country, image)
                VALUES (:country, :image)');
        $stmt->execute([
            'country' => $data['country'],
            'image' => $data['image'],
        ]);
        return $this->pdo->lastInsertId();
    }

    public function getAllCountry()
    {
        $stmt = $this->pdo->query('SELECT * FROM categories ORDER BY id ');
        return $stmt->fetchAll();
    }

    public function deleteCountry($id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM categories WHERE id=:id');
        $stmt->execute(['id' => $id]);
    }

    public function getOneCountry($id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM categories WHERE id=:id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }
}