<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear tarea</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css"
    >
</head>
<body>
<section class="section">
        <div class="container">
            <div class="columns is-centered">
                <form action="add_task.php" method="POST" class="box">
                    <h1 class="title has-text-centered">Crear tarea</h1>
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Titulo</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                            <div class="control">
                                <input class="input" type="title" name="title" type="text" placeholder="Digite el titulo" required>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Descripcion</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                            <div class="control">
                                <input class="input" type="description" name="description" type="text" placeholder="Digite la descripcion de la tarea" required>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="field is-grouped is-grouped-right">
                        <p class="control">
                            <button type="submit" class="button is-success">
                                Crear
                            </button>
                        </p>
                        <p class="control">
                            <a href="listTask.php" class="button is-light">
                            Cancel
                            </a>
                        </p>
                    </div>
                </form>
                <br>

            </div>
        </div>
    </section>
    
</body>
</html>