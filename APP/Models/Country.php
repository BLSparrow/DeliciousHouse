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
        $stmt = $this->pdo->prepare('INSERT INTO countrys(country, image_country)
                VALUES (:country, :image_country)');
        $stmt->execute([
            'country' => $data['country'],
            'image_country' => $data['image_country'],
        ]);
        return $this->pdo->lastInsertId();
    }
}