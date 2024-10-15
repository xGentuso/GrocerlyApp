<?php 

class DietaryPreference {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function createPreference($preference_name) {
        $statement = $this->db->prepare("INSERT INTO Dietary_Preferences (preference_name) VALUES (:preference_name");
        return $statement->execute(['preference_name' => $preference_name]);
    }

    public function getPreferenceId($preference_id) {
        $statement = $this->db->prepare("SELECT * FROM Dietary_Preferences WHERE preference_id = :preference_id");
        return $statement->execute(['preference_id' => $preference_id]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllPreferences() {
        $statment = $this->db->query("SELECT * FROM Dietary_Preferences");
        return $statment->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deletePreference($preference_id) {
        $statment = $this->db->prepare("DELETE FROM Dietary_Preferences WHERE preference_id = :preference_id");
        return $statment->execute(['preference_id' => $preference_id]);
    }
}
?>