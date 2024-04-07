<?php
 class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "kontak";
    public $conn;

    public function getConnection(){
        $this->conn = null;

        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Koneksi database gagal: " . $exception->getMessage();
        }

        return $this->conn;
    }
}   
?>

<?php
class kontak {
    private $conn;
    private $table_name = "datakontak";

    // Properti 
    public $Id;
    public $Nama;
    public $No_WA;
    public $email;

    // Constructor 
    public function __construct($db){
        $this->conn = $db;
    }

    // Fungsi Create untuk menambahkan data kontak
    function create(){
        $query = "INSERT INTO " . $this->table_name . " SET Nama=:Nama, No_WA=:No_WA, email=:email";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":Nama", $this->Nama);
        $stmt->bindParam(":No_WA", $this->No_WA);
        $stmt->bindParam(":email", $this->email);

        if($stmt->execute()){
            return true;
        }

        return false;
    }

    // Fungsi Read untuk membaca data kontak
    function read(){
        $query = "SELECT Id, Nama, No_WA, email FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    // Fungsi Update untuk mengubah data kontak
    function update(){
        $query = "UPDATE " . $this->table_name . " SET Nama=:Nama, No_WA=:No_WA, email=:email WHERE Id=:Id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":Id", $this->Id);
        $stmt->bindParam(":Nama", $this->Nama);
        $stmt->bindParam(":No_WA", $this->No_WA);
        $stmt->bindParam(":email", $this->email);

        if($stmt->execute()){
            return true;
        }

        return false;
    }

    // Fungsi Delete untuk menghapus data kontak
    function delete(){
        $query = "DELETE FROM " . $this->table_name . " WHERE Id = ?";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(1, $this->Id);

        if($stmt->execute()){
            return true;
        }

        return false;
    }
}
?>
<?php
// Menggunakan kelas Database untuk membuat koneksi
include_once 'models.php';

// Membuat objek database
$database = new Database();
$db = $database->getConnection();

// Membuat objek kontak
$kontak = new kontak($db);

// // Implementasi fungsi Create
$kontak->Nama = "Kirana nala senja";
$kontak->No_WA= "0831568909";
$kontak->email= "kirananalasnj12@gmail.com";
if($kontak->create()){
    echo "Informasi kontak ditambahkan";
} else{
    echo "Informasi kontak gagal ditambahkan";
}

// Implementasi fungsi Read
$stmt = $kontak->read();
$num = $stmt->rowCount();

if($num>0){
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        echo "ID: {$Id}, Nama: {$Nama}, No_WA: {$No_WA}, email: {$email}<br>";
    }
} else {
    echo "Kontak tidak ditemukan";
}

// Implementasi fungsi Update
$kontak->Id = 8;
$kontak->Nama = "Kirana nala senja";
$kontak->No_WA= "0831568909";
$kontak->email= "kiranasajaa@gmail.com";
if($kontak->update()){
    echo "Informasi kontak berhasil di update";
} else{
    echo "Informasi kontak gagal di update";
}

// // Implementasi fungsi Delete
$kontak->Id = 1;
if($kontak->delete()){
    echo "Informasi kontak dihapus.";
} else{
    echo "Informasi kontak gagal dihapus";
}
?>