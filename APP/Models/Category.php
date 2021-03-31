<?php


namespace APP\Models;

use PDO;


class Category
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function addCategory($data)
    {
        $stmt = $this->pdo->prepare('INSERT INTO categories(name_category, description_category, image_category)
                VALUES (:name_category, :description_category, :image_category)');
        $stmt->execute([
            'name_category' => $data['name_category'],
            'description_category' => $data['description_category'],
            'image_category' => $data['image_category']
        ]);
        return $this->pdo->lastInsertId();
    }
}