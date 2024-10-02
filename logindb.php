<?php
include_once "./inc/session_start.php";
echo "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css'>";

if ($conn ->connect_error) {
    die("Error en la conexion: " . $conn->connect_error);
}
var_dump($_SESSION['user_id']); // Esto debería mostrar un entero válido

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $_SESSION['user_id'] = $user['id'];
    echo "<div class='notification is-success'>";
    echo "Bienvenido, $username.<br>";
    echo "</div>";
    // echo "<button class='button is-link' onclick=\"location.href='taskHTML.php'\">Agregar tarea</button>";
    echo "<button class='button is-link' onclick=\"location.href='listTask.php'\">Mis tareas</button>";
    echo "<br><br>";
    echo '<a href="index.php">Regresar</a>';
} else {
    echo "<div class='notification is-danger'>";
    echo "Usuario o contraseña incorrectos.<br>";
    echo "</div>";
    echo '<a href="index.php">Regresar</a>';
}

$conn->close();
?>