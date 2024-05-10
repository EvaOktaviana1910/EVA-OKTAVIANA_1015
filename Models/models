<?php

include_once 'CONTROLLER/controller.php';

class ContactModel {
    private static $conn;

    public function __construct($conn) {
        self::$conn = $conn;
    }
    

    static function insertcontactapps($PHONE_NUMBER, $VISITORS, $BOOK_TITLE, $PUBLISHER) {
        $sql = "INSERT INTO contactapps (PHONE_NUMBER, VISITORS, BOOK_TITLE, PUBLISHER) VALUES (?, ?, ?, ?)";
        $stmt = self::$conn->prepare($sql);
        $stmt->bind_param("siss", $PHONE_NUMBER, $VISITORS, $BOOK_TITLE, $PUBLISHER);
        return $stmt->execute();
    }

    static function deletecontactapps($ID_NUMBER) {
        $sql = "DELETE FROM contactapps WHERE ID_NUMBER = ?";
        $stmt = self::$conn->prepare($sql);
        $stmt->bind_param("i", $ID_NUMBER);
        return $stmt->execute();
    }

    static function updatecontactapps($ID_NUMBER, $PHONE_NUMBER, $VISITORS, $BOOK_TITLE, $PUBLISHER) {
        $sql = "UPDATE contactapps SET PHONE_NUMBER = ?, VISITORS = ?, BOOK_TITLE = ?, PUBLISHER = ? WHERE ID_NUMBER = ?";
        $stmt = self::$conn->prepare($sql);
        $stmt->bind_param("sissi", $PHONE_NUMBER, $VISITORS, $BOOK_TITLE, $PUBLISHER, $ID_NUMBER);
        return $stmt->execute();
    }

    static function getcontactapps() {
        $sql = "SELECT * FROM contactapps";
        $result = self::$conn->query($sql);
        if ($result->num_rows > 0) {
            $contacts = array();
            while ($row = $result->fetch_assoc()) {
                $contacts[] = $row;
            }
            return $contacts;
        } else {
            return null;
        }
    }
}
?>
