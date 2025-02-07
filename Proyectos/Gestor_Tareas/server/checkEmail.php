<?php
include("getConnection.php");

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    $stmt = $conn->prepare("SELECT * FROM usuario WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "existe";
    } else {
        echo "disponible";
    }

    $stmt->close();
    $conn->close();
}
?>