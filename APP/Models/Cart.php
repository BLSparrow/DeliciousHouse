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
        $stmt = $this->pdo->prepare("INSERT INTO baskets(order_id, product_id, quantity) 
                                    VALUES (:order_id, :product_id, :quantity)");
        $stmt->execute([
            'order_id' => $data['order_id'],
            'product_id' => $data['product_id'],
            'quantity' => $data['quantity'],
        ]);
        return $this->pdo->lastInsertId();
    }


    public function addManyCarts($order_id, $data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO baskets(order_id, product_id, quantity) 
                                    VALUES (:order_id, :product_id, :quantity)");
        foreach ($data as $k => $v) {
            $stmt->execute([
                'order_id' => $order_id,
                'product_id' => $k,
                'quantity' => $v,
            ]);
        }

    }

    public function getFullCart($id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM products WHERE id=:id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }
}