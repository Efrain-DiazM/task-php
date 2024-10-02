<?php
include_once "./inc/session_start.php";
echo "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css'>";

if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}

$session_id = session_id();
$_SESSION['user_id'] = $session_id;

if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
  }
  
  $session_id = session_id();
  $_SESSION['user_id'] = $session_id;
  
if (isset($_GET['id'])) {
$task_id = $_GET['id'];


$query = "SELECT * FROM task WHERE id = ?";
$stmt = $conn->prepare($query);

$sql = "DELETE FROM task WHERE id = ? AND user_id = ?";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("ii", $task_id, $_SESSION['user_id']);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "<div class='notification is-success'>";
        echo "Tarea eliminada con éxito";
        echo "</div>";
        echo "<button onclick=\"location.href='listTask.php'\">Regresar</button>";

    } else {
        echo "<div class='notification is-danger'>";
        echo "Error: No se pudo eliminar la tarea";
        echo "</div>";
    }

    $stmt->close();
} else {
    echo "<div class='notification is-danger'>";
    echo "Error: " . $conn->error;
    echo "</div>";
}
} else {
echo "<div class='notification is-danger'>No task ID provided.</div>";
}

$conn->close();
?>