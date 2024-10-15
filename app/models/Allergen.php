<?php 

class Allergen {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function createAllergen($allergen_name) {
        $statement = $this->db->prepare("INSERT INTO Allergens (allergen_name) VALUES (:allergen_name");
        return $statement->execute(['allergen_name' => $allergen_name]);
    }

    public function getAllergenId($allergen_id) {
        $statement = $this->db->prepare("SELECT * FROM Allergens WHERE allergen_id = :allergen_id");
        return $statement->execute(['allergen_id' => $allergen_id]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllAllergens() {
        $statment = $this->db->query("SELECT * FROM Allergens");
        return $statment->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteAllergen($allergen_id) {
        $statment = $this->db->prepare("DELETE FROM Allergens WHERE allergen_id = :allergen_id");
        return $statment->execute(['allergen_id' => $allergen_id]);
    }
}
?>