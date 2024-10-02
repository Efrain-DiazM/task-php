<?php
include_once "./inc/session_start.php";
echo "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css'>";

if ($conn ->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $code = $_POST['code'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO usuarios (name, last_name, code, email, phone_number, username, password) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $result = $conn->query($sql);

    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("sssssss", $name, $last_name, $code, $email, $phone_number, $username, $password);
    } else {
        echo "<div class='notification is-danger'>";
        echo "Error: " . $conn->error;
        echo "</div>";
    }

    if ($stmt->execute()) {
        echo "<div class='notification is-success'>";
        echo "Registro exitoso.<br>";
        echo "</div>";
        echo "<button onclick=\"location.href='index.php'\">Regresar</button>";
    } else {
        echo "<div class='notification is-danger'>";
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "</div>";
    }

$stmt->close();
}