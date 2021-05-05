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
        $stmt = $this->pdo->prepare('INSERT INTO countries(country, image)
                VALUES (:country, :image)');
        $stmt->execute([
            'country' => $data['country'],
            'image' => $data['image'],
        ]);
        return $this->pdo->lastInsertId();
    }

    public function getAllCountry()
    {
        $stmt = $this->pdo->query('SELECT * FROM countries ORDER BY id ');
        return $stmt->fetchAll();
    }

    public function deleteCountry($id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM countries WHERE id=:id');
        $stmt->execute(['id' => $id]);
    }

    public function getOneCountry($id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM countries WHERE id=:id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    public function updateCountry($data)
    {
        $stmt = $this->pdo->prepare('UPDATE countries SET country = :country,image=:image WHERE id=:id');
        $stmt->execute([
            'id' => $data['id'],
            'country' => $data['country'],
            'image' => $data['image'],
        ]);
    }
    public function getProductsForCountry($id)
    {

        $stmt = $this->pdo->prepare('SELECT products.*, categories.name as nameCateg, countries.image as imageC FROM products 
                            inner join categories on products.category_id = categories.id 
                            INNER JOIN countries ON products.country_id = countries.id
                            WHERE countries.id=:id');
        $stmt->execute(['id' => $id]);
        $temp = $stmt->fetchAll();

        return $temp;
    }
}