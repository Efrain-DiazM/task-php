<?php
include_once "./inc/session_start.php";
echo "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css'>";

if ($conn->connect_error) {
  die("Conexion fallida: " . $conn->connect_error);
}

$session_id = session_id();
$_SESSION['user_id'] = $session_id;

if (isset($_GET['id'])) {
  $task_id = $_GET['id'];

  // Get the task information from the database
  $query = "SELECT * FROM task WHERE id = ?";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("i", $task_id);
  $stmt->execute();
  $result = $stmt->get_result();
  $task = $result->fetch_assoc();

  if ($task) {
    // Display the task information
    echo "<div class='container'>";
    echo "<h2 class='title'>Edit Task</h2>";
    echo "<form action='edit_task.php?id=" . htmlspecialchars($task_id) . "' method='post'>";
    echo "<div class='field'>";
    echo "<label class='label' for='title'>Title:</label>";
    echo "<div class='control'>";
    echo "<input class='input' type='text' id='title' name='title' value='" . htmlspecialchars($task['title']) . "'>";
    echo "</div>";
    echo "</div>";
    echo "<div class='field'>";
    echo "<label class='label' for='description'>Description:</label>";
    echo "<div class='control'>";
    echo "<textarea class='textarea' id='description' name='description'>" . htmlspecialchars($task['description']) . "</textarea>";
    echo "</div>";
    echo "</div>";
    echo "<div class='field'>";
    echo "<div class='control'>";
    echo "<input class='button is-primary' type='submit' value='Guardar cambios'>";
    echo "</div>";
    echo "</div>";
    echo "</form>";
    echo "</div>";
  } else {
    echo "<div class='notification is-danger'>Tarea no encontrada.</div>";
  }

  $stmt->close();
} else {
  echo "<div class='notification is-danger'>Tarea no encontrada.</div>";
}

// Update the task information in the database
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['id'])) {
  $task_id = $_GET['id'];
  $title = $_POST['title'];
  $description = $_POST['description'];

  $query = "UPDATE task SET title = ?, description = ? WHERE id = ?";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("ssi", $title, $description, $task_id);
  $stmt->execute();

  header("Location: listTask.php");
  exit;
}

$conn->close();
?>