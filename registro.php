<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css"
    >
</head>
<body>
<section class="section">
        <div class="container">
            <div class="columns is-centered">
                <form action="registrar.php" method="POST" class="box">
                    <h1 class="title has-text-centered">Registro de usuario</h1>
                    <div class="field">
                        <p class="control has-icons-left has-icons-right">
                            <input class="input" type="name" name="name" placeholder="Nombre" required>
                            <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                            </span>
                            <span class="icon is-small is-right">
                            <i class="fas fa-check"></i>
                            </span>
                        </p>
                    </div>
                    <div class="field">
                        <p class="control has-icons-left has-icons-right">
                            <input class="input" type="last_name" name="last_name" placeholder="Apellidos" required>
                            <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                            </span>
                            <span class="icon is-small is-right">
                            <i class="fas fa-check"></i>
                            </span>
                        </p>
                    </div>
                    <div class="field">
                        <p class="control has-icons-left has-icons-right">
                            <input class="input" type="code" name="code" placeholder="Codigo" required>
                            <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                            </span>
                            <span class="icon is-small is-right">
                            <i class="fas fa-check"></i>
                            </span>
                        </p>
                    </div>
                    <div class="field">
                        <p class="control has-icons-left has-icons-right">
                            <input class="input" type="email" name="email" placeholder="Correo Electronico" required>
                            <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                            </span>
                            <span class="icon is-small is-right">
                            <i class="fas fa-check"></i>
                            </span>
                        </p>
                    </div>
                    <div class="field">
                        <p class="control has-icons-left has-icons-right">
                            <input class="input" type="username" name="username" placeholder="Nombre de usuario" required>
                            <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                            </span>
                            <span class="icon is-small is-right">
                            <i class="fas fa-check"></i>
                            </span>
                        </p>
                    </div>
                    <div class="field">
                        <p class="control has-icons-left has-icons-right">
                            <input class="input" type="phone_number" name="phone_number" placeholder="Telefono" required>
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
                            Registrar
                            </button>
                        </p>
                        <br>
                        <a href="index.php"><button type="button" class="button is-link">Regresar</button></a>
                    </div>
                </form>
                <br>
                <!-- <a href="registro.php"><button type="button">Registrar</button></a> -->
            </div>
        </div>
    </section>
    <!-- <h2>Registro de usuario</h2>
    <form action="registrar.php" method="POST">
        <label for="username">Usuario:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit">Registrar</button>
    </form>
    <br>
    <a href="index.php"><button type="button">Regresar</button></a> -->
    
</body>
</html>