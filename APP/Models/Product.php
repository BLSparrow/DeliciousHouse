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
        $stmt = $this->pdo->query('SELECT * FROM products ORDER BY category_id DESC');
        return $stmt->fetchAll();
    }

    public function getAllProductsWithCountry()
    {
        $stmt = $this->pdo->query('SELECT products.*, countries.country, countries.image as imageC
                            FROM products INNER JOIN countries ON products.country_id = countries.id');
        return $stmt->fetchAll();
    }

    public function getAllProductsLimit()
    {
        $stmt = $this->pdo->query('SELECT products.*, countries.country, countries.image as imageC
                            FROM products INNER JOIN countries ON products.country_id = countries.id 
                                INNER JOIN categories ON products.category_id = categories.id
                                WHERE category_id = 8 LIMIT 3');
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

    public function updateProduct($data)
    {
        $stmt = $this->pdo->prepare('UPDATE products SET category_id=:category_id, country_id=:country_id, name=:name, description=:description,image=:image, numberOfServings=:numberOfServings,weight=:weight, price=:price WHERE id=:id');
        $stmt->execute([
            'id' => $data['id'],
            'category_id' => $data['category_id'],
            'country_id' => $data['country_id'],
            'name' => $data['name'],
            'description' => $data['description'],
            'image' => $data['image'],
            'numberOfServings' => $data['numberOfServings'],
            'weight' => $data['weight'],
            'price' => $data['price']
        ]);
    }
    public function getOneText($id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM texts WHERE id=:id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

}