<?php
class contactapps 
    {
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "crud";
        private $conn;

    
        public function __construct() {
            $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);
            if (!$this->conn) {
                die("Koneksi gagal: " . mysqli_connect_error());
            }
        }

        public function getConnection() {
            return $this->conn;
        }

            // Fungsi untuk menampilkan semua kontak
            public function selectcontactapps() {
                $sql = "SELECT * FROM contactapps";
                $result = mysqli_query($this->conn, $sql);
                return $result;
            }

            public function getcontactappsByIDNUMBER($ID_NUMBER) {
                $sql = "SELECT * FROM contactapps WHERE ID_NUMBER = ".$ID_NUMBER;
                $result = mysqli_query($this->conn, $sql);
                return $result;
            }

            public function insertcontactapps($PHONE_NUMBER, $VISITORS, $BOOK_TITLE, $PUBLISHER) {
                $sql = "INSERT INTO contactapps (PHONE_NUMBER, VISITORS, BOOK_TITLE, PUBLISHER) VALUES ('".$PHONE_NUMBER."', '".$VISITORS."', '".$BOOK_TITLE."', '".$PUBLISHER."')";
                $result = mysqli_query($this->conn, $sql);
                return $result;
            }
            
            public function updatecontactapps($ID_NUMBER, $PHONE_NUMBER, $VISITORS, $BOOK_TITLE, $PUBLISHER) {
                $sql = "UPDATE contactapps SET PHONE_NUMBER='".$PHONE_NUMBER."', VISITORS='".$VISITORS."', BOOK_TITLE='".$BOOK_TITLE."', PUBLISHER='".$PUBLISHER."' WHERE ID_NUMBER=".$ID_NUMBER;
                $result = mysqli_query($this->conn, $sql);
                return $result;
            }
            
            public function deletecontactapps($ID_NUMBER) {
                $sql = "DELETE FROM contactapps  WHERE ID_NUMBER=".$ID_NUMBER."";
                $result = mysqli_query($this->conn, $sql);
                return $result;
            }

    }
?>