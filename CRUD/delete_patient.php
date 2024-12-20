<?php
include 'config.php';

$id = $_GET['id'];
$conn->query("DELETE FROM patients WHERE id = $id");
header("Location: patients.php");
?>
