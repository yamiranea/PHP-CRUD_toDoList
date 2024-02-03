<?php include("/Applications/MAMP/htdocs/PHP-toDoList/database/PDO/DatabaseConnection.php"); ?>

<!doctype html>
<html lang="en">

<head>
  <title>Task list Planner</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="./styles.css">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main class="container">
    <br />
    <div class="card">
      <div class="card-header">TASKS PLANNER</div>
      <div class="card-body">
        <!-- Formulario para agregar nueva tarea -->
        <form action="" method="post" class="mb-3">
          <label for="task" class="form-label">New Task: </label>
          <input type="text" class="form-control" name="task" id="task" placeholder="Add a new thing you want to do" />
          <br />
          <input name="add-task" id="add-task" class="btn btn-primary" type="submit" value="Add task" />
        </form>

        <!-- Tabla para mostrar tareas existentes -->
        <table class="table">
          <thead>
            <tr>
              <th>Completed</th>
              <th>Date</th>
              <th>Task</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($outcomes as $outcome) { ?>
              <tr>
                <td>
                  <form action="" method="post">
                    <input type="hidden" name="id" value="<?php echo $outcome['id']; ?>">
                    <input class="form-check-input" type="checkbox" name="status" value="<?php echo $outcome['status']; ?>" onChange="this.form.submit()" <?php echo ($outcome['status'] == 1) ? 'checked' : ''; ?> />
                  </form>
                </td>
                <td><?php echo ($outcome['date'] != '0000-00-00') ? $outcome['date'] : ''; ?></td>
                <td><?php echo $outcome['task']; ?></td>
                <td>
                  <a href="?id=<?php echo $outcome['id']; ?>">
                    <span class="badge bg-danger">x</span>
                  </a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
</body>

</html>