<?php
include_once "./inc/session_start.php";
echo "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css'>";

if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}

$session_id = session_id();
$_SESSION['user_id'] = $session_id;

$sql = "SELECT id, title, description FROM task WHERE user_id = ?";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("s", $_SESSION['user_id']);
    $stmt->execute();
    $stmt->bind_result($id, $title, $description);

    echo "<div class='container'>";
    echo "<div class='level'>";
    echo "<div class='level-left'>";
    echo "<h1 class='title'>Mis Tareas</h1>";
    echo "</div>";
    echo "<div class='level-right'>";
    echo "<a href='logout.php' class='button is-danger'>Cerrar Sesión</a>";
    echo "</div>";
    echo "</div>";
    echo "<a href='taskHTML.php' class='button is-primary'>Agregar Tarea Nueva</a>";
    echo "<table class='table is-striped' style='margin-top: 20px;'>";
    echo "<thead><tr><th>Título</th><th>Descripción</th><th>Acciones</th></tr></thead>";
    echo "<tbody>";

    while ($stmt->fetch()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($title) . "</td>";
        echo "<td>" . htmlspecialchars($description) . "</td>";
        echo "<td>";
        echo "<a href='edit_task.php?id=" . htmlspecialchars($id) . "' class='button is-warning is-small'>Editar</a> ";
        echo "<a href='delete_task.php?id=" . htmlspecialchars($id) . "' class='button is-danger is-small'>Eliminar</a>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
    echo "</div>";

    $stmt->close();
} else {
    echo "<div class='notification is-danger'>";
    echo "Error: " . $conn->error;
    echo "</div>";
}

$conn->close();
?>