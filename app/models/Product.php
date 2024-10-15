<?php 

class Product {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function createProduct($productName, $barcode = null, $description = null) {
        $statement = $this->db->prepare("INSERT INTO Products (product_name, barcode, description)
                                            VALUES (:product_name, :barcode, :description");
        return $statement->execute(['product_name' => $productName, 'barcode' => $barcode, 'description' => $description]);
    }

    public function getProductId($product_id) {
        $statement = $this->db->prepare("SELECT * FROM Products WHERE product_id = :product_id");
        return $statement->execute(['product_id' => $product_id]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllProducts() {
        $statment = $this->db->query("SELECT * FROM Products");
        return $statment->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteProduct($product_id) {
        $statment = $this->db->prepare("DELETE FROM Products WHERE product_id = :product_id");
        return $statment->execute(['product_id' => $product_id]);
    }
}
?>