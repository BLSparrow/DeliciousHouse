<?php


namespace APP\Models;

use PDO;

class Cart
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function addCart($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO baskets(product_id, quantity) 
                                    VALUES (:product_id, :quantity)");
        $stmt->execute([
            'product_id' => $data['product_id'],
            'quantity' => $data['quantity'],
        ]);
        return $this->pdo->lastInsertId();
    }



    public function getFullCart($id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM products WHERE id=:id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }


    public function deleteFromCart($id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM baskets WHERE id=:id');
        $stmt->execute(['id' => $id]);
    }

    public function getAllProducts()
    {
        $stmt = $this->pdo->query('SELECT * FROM products');
        return $stmt->fetchAll();
    }

}