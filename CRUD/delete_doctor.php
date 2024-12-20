<?php
include 'config.php';

$id = $_GET['id'];
$conn->query("DELETE FROM doctors WHERE id = $id");
header("Location: doctors.php");
?>
