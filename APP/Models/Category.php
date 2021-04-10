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
        $stmt = $this->pdo->prepare('INSERT INTO categories(name, description, image)
                VALUES (:name, :description, :image)');
        $stmt->execute([
            'name' => $data['name'],
            'description' => $data['description'],
            'image' => $data['image']
        ]);
        return $this->pdo->lastInsertId();
    }

    public function getAllCategories()
    {
        $stmt = $this->pdo->query('SELECT * FROM categories ORDER BY name ');
        return $stmt->fetchAll();
    }

    public function deleteCategory($id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM categories WHERE id=:id');
        $stmt->execute(['id' => $id]);
    }

    public function getOneCategory($id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM categories WHERE id=:id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    public function updateCategory($data)
    {
        $stmt = $this->pdo->prepare('UPDATE categories SET name = :name,description=:description,image=:image WHERE id=:id');
        $stmt->execute([
            'id' => $data['id'],
            'name' => $data['name'],
            'description' => $data['description'],
            'image' => $data['image'],
        ]);
    }

    public function getProductsForCategory($id)
    {
        $stmt = $this->pdo->prepare('SELECT products.*, categories.name FROM products 
                            inner join categories on products.category_id = categories.id
                            WHERE categories.id=:id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetchAll();
    }
}