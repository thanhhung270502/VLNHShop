<?php
    include('../models/connection.php')
?>

<?php
    $username = $_GET['username'];
    $password = $_GET['password'];

    $sql = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            setcookie("user_id", $row["id"], time() + (86400 * 30), "/");
            header('location:index.php');
        }
    }
?>