
<?php
include 'connect.php';

// Ambil data dari formulir
// $ID_NUMBER = $_POST['ID_NUMBER']; // Perbaiki nama field menjadi sesuai dengan yang ada pada formulir
$PHONE_NUMBER = $_POST['PHONE_NUMBER']; // Perbaiki nama field menjadi sesuai dengan yang ada pada formulir
$VISITORS = $_POST['VISITORS']; // Perbaiki nama field menjadi sesuai dengan yang ada pada formulir
$BOOK_TITLE = $_POST['BOOK_TITLE'];
$PUBLISHER = $_POST['PUBLISHER'];
// Membuat objek Contacts
$crud = new contactapps();

// Insert data ke database
$result = $crud->insertcontactapps($PHONE_NUMBER, $VISITORS, $BOOK_TITLE, $PUBLISHER);

// Cek apakah berhasil diinsert atau tidak
if ($result) {
    echo "Data berhasil ditambahkan.";
    // Redirect to dashboard
    echo "<script>window.location.href = 'index.php';</script>";
} else {
    echo "Gagal menambahkan data.";
}
?>
