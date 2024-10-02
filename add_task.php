<?php
include_once "./inc/session_start.php";
echo "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css'>";

if ($conn ->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}

$session_id = session_id();
$_SESSION['user_id'] = $session_id;
var_dump($_SESSION['user_id']);
echo "Usuario en sesión: " . $session_id;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];


    $sql = "INSERT INTO task (user_id, title, description) VALUES (?, ?, ?)";
    $result = $conn->query($sql);

    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("sss", $_SESSION['user_id'], $title, $description);
    } else {
        echo "<div class='notification is-danger'>";
        echo "Error: " . $conn->error;
        echo "</div>";
    }

    if ($stmt->execute()) {
        echo "<div class='notification is-success'>";
        echo "Tarea creada con exito.<br>";
        echo "</div>";
        echo "<button onclick=\"location.href='listTask.php'\">Regresar</button>";
    } else {
        echo "<div class='notification is-danger'>";
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "</div>";
    }

$stmt->close();
}