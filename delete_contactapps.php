<?php
include 'connect.php';

$crud = new contactapps();
$conn = $crud->getConnection();

$ID_NUMBER = $_GET['id_number'];
$query = $conn->prepare("DELETE FROM contactapps WHERE ID_NUMBER = ?");
$query->bind_param("i", $ID_NUMBER); 
$query->execute();

header("Location: index.php");
?>
