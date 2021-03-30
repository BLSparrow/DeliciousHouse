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
        $stmt = $this->pdo->prepare('DELETE FROM products WHERE id_product=:id_productid');
        $stmt->execute(['id_product' => $id]);
    }

    public function getOneProduct($id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM products WHERE id_product=:id_product');
        $stmt->execute(['id_product' => $id]);
        return $stmt->fetch();
    }

    public function addProduct($data)
    {
        $stmt = $this->pdo->prepare('INSERT INTO products(category_id, сountry_id, name_product, description_product, image_product, numberOfServings, weight, price)
                VALUES (:category_id, :сountry_id, :name_product, :description_product, :image_product, :numberOfServings, :weight, :price)');
        $stmt->execute([
            'category_id' => $data['category_id'],
            'country_id' => $data['country_id'],
            'name_product' => $data['name_product'],
            'description_product' => $data['description_product'],
            'image_product' => $data['image_product'],
            'numberOfServings' => $data['numberOfServings'],
            'weight' => $data['weight'],
            'price' => $data['price'],
        ]);
        return $this->pdo->lastInsertId();
    }

    public function updateProduct($data)
    {
        $stmt = $this->pdo->prepare('UPDATE products SET  сountry_id=:сountry_id, name_product=:name_product, description_product=:description_product, image_product=:image_product, numberOfServings=:numberOfServings, weight=:weight, price=:price
WHERE category_id=:category_id');
        $stmt->execute([
            'id_product' => $data['id_product'],
            'title' => $data['title'],
            'text' => $data['text'],
            'created_at' => date('Y-m-d'),
            'image' => $data['image'],
        ]);
    }

}