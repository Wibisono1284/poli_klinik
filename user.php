<?php
session_start();
if (!isset($_SESSION['level']) || $_SESSION['level'] !== 'user') {
    header("Location: login.php");
    exit();
}
?>
