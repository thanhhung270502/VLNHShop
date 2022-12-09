<?php
    include('../../models/connection.php')
?>

<?php
    $sql = "SELECT * FROM size";
    $result = $conn->query($sql);
    // if ($result->num_rows > 0) {
    //     while($row = $result->fetch_assoc()) {
    //         echo '
    //             name: '.$row["name"].'
    //         ';
    //     }
    // }
?>