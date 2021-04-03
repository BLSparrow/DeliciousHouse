<?php

namespace APP\Models;

use PDO;

class Product
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllProducts()
    {
        $stmt = $this->pdo->query('SELECT * FROM products ORDER BY category_id DESC ');
        return $stmt->fetchAll();
    }


    public function deleteProduct($id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM products WHERE id=:id');
        $stmt->execute(['id' => $id]);
    }

    public function getOneProduct($id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM products WHERE id=:id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    public function addProduct($data)
    {
        $stmt = $this->pdo->prepare('INSERT INTO products(category_id, country_id, name, description, image, numberOfServings, weight, price)
                VALUES (:category_id, :country_id, :name, :description, :image, :numberOfServings, :weight, :price)');
        $stmt->execute([
            'category_id' => $data['category_id'],
            'country_id' => $data['country_id'],
            'name' => $data['name'],
            'description' => $data['description'],
            'image' => $data['image'],
            'numberOfServings' => $data['numberOfServings'],
            'weight' => $data['weight'],
            'price' => $data['price'],
        ]);
        return $this->pdo->lastInsertId();
    }

}