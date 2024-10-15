<?php 

class Store {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function createStore($store_name, $address, $latitude, $longitude, $hours, $phone_number) {
        $statement = $this->db->prepare("INSERT INTO Stores (store_name, address, latitude, longitude, hours, phone_number)
                                            VALUES (:store_name, :address, :latitude, :longitude, :hours, :phone_phone");
        return $statement->execute(['store_name' => $store_name, 'address' => $address, 
                                    'latitude' => $latitude, 'longitude' => $longitude, 'hours' => $hours, 'phone_number' => $phone_number]);
    }

    public function getStoreId($store_id) {
        $statement = $this->db->prepare("SELECT * FROM Stores WHERE store_id = :store_id");
        return $statement->execute(['store_id' => $store_id]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllStores() {
        $statment = $this->db->query("SELECT * FROM Stores");
        return $statment->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteStore($store_id) {
        $statment = $this->db->prepare("DELETE FROM Stores WHERE store_id = :store_id");
        return $statment->execute(['store_id' => $store_id]);
    }
}
?>