<?php
include_once "./inc/session_start.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login sencillo</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css"
    >
</head>
<body>
    <section class="section">
        <div class="container">
            <div class="columns is-centered">
                <form action="logindb.php" method="POST" class="box">
                    <h1 class="title has-text-centered">Login en PHP</h1>
                    <div class="field">
                        <p class="control has-icons-left has-icons-right">
                            <input class="input" type="username" name="username" placeholder="Usuario" required>
                            <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                            </span>
                            <span class="icon is-small is-right">
                            <i class="fas fa-check"></i>
                            </span>
                        </p>
                        </div>
                        <div class="field">
                        <p class="control has-icons-left">
                            <input class="input" type="password" name="password" placeholder="Contraseña" required>
                            <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                            </span>
                        </p>
                        </div>
                        <div class="field">
                        <p class="control">
                            <button type="submit" class="button is-success">
                            Login
                            </button>
                        </p>
                        <br>
                        <a href="registro.php"><button type="button" class="button is-link">Registrar</button></a>
                    </div>
                </form>
                <br>
                <!-- <a href="registro.php"><button type="button">Registrar</button></a> -->
            </div>
        </div>
    </section>
    <br>
    <!-- <a href="registro.php">Registrarse</a> -->
    
</body>
</html>