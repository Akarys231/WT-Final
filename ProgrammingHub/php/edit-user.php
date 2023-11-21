<?php
include "connect.php";

$conn = new mysqli("localhost", "root", "", "proghub");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST["id"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $sql = "UPDATE users SET name=?, surname=?, email=?, phone=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $name, $surname, $email, $phone, $userId);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
