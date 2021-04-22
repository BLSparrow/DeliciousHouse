<?php


namespace APP\Models;

use PDO;

class Order
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function addOrder($data)
    {
        $stmt = $this->pdo->prepare('INSERT INTO orders(status, delivery_method, order_cost, name, telephone, address)
                VALUES (:status_id, :delivery_method_id, :order_cost, :name, :telephone, :address)');
        $stmt->execute([
            'status_id' => $data['status_id'],
            'delivery_method_id' => $data['delivery_method_id'],
            'order_cost' => $data['order_cost'],
            'name' => $data['name'],
            'telephone' => $data['telephone'],
            'address' => $data['address'],
        ]);
        return $this->pdo->lastInsertId();
    }

    public function getDelivery_method()
    {
        $stmt = $this->pdo->prepare('SELECT * FROM delivery_methods');
        return $stmt->fetchAll();
    }
}