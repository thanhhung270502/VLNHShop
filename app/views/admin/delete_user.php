<?php
require_once __DIR__ . '/../../../controllers/user.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    DeleteUser($_GET['id']);
}

header('Location: manage_user.php');