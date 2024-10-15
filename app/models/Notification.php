<?php 

class Notification {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function createNotification($user_id, $message, $notification_type, $related_id = NULL) {
        $statement = $this->db->prepare("INSERT INTO Notifications (user_id, message, notification_type, related_id) 
                                        VALUES (:user_id, :message, :notification_type, :related_id");
        return $statement->execute(['user_id' => $user_id, 'message' => $message, 'notification_type' => $notification_type, 
                                        'related_id' => $related_id]);
    }

    public function getNoticationByUserId($user_id) {
        $statement = $this->db->prepare("SELECT * FROM Notifications WHERE user_id = :user_id");
        return $statement->execute(['user_id' => $user_id]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllNotifications() {
        $statment = $this->db->query("SELECT * FROM Notifications");
        return $statment->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteANotifications($user_id) {
        $statment = $this->db->prepare("DELETE FROM Notifications WHERE user_id = :user_id");
        return $statment->execute(['user_id' => $user_id]);
    }
}
?>