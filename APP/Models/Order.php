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
        $stmt = $this->pdo->prepare('INSERT INTO orders(status_id, delivery_method_id, order_cost, name, telephone, address)
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

    public function getAllOrders()
    {
        $stmt = $this->pdo->query('SELECT orders.*, statuses.name_status, delivery_methods.delivery_method FROM orders
            INNER JOIN statuses ON orders.status_id = statuses.id 
            INNER JOIN delivery_methods ON orders.delivery_method_id = delivery_methods.id 
            INNER JOIN baskets ON orders.id = baskets.order_id ORDER BY orders.id');
        return $stmt->fetchAll();
    }

    public function getDelivery_method()
    {
        $stmt = $this->pdo->query('SELECT * FROM delivery_methods');
        return $stmt->fetchAll();
    }

    public function getStatuses()
    {
        $stmt = $this->pdo->query('SELECT * FROM statuses');
        return $stmt->fetchAll();
    }

    public function updateStatus($data)
    {
        $stmt = $this->pdo->prepare('UPDATE orders SET status_id = :status_id where id=:id');
        $stmt->execute([
            'id' => $data['id'],
            'status_id' => $data['status_id'],
        ]);
    }

    public function deleteBasket($id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM baskets WHERE order_id=:order_id');
        $stmt->execute(['order_id' => $id]);
    }
    public function deleteOrder($id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM orders WHERE id=:id');
        $stmt->execute(['id' => $id]);
    }
}