<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список дел</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>

<body>
    <div class="container">
        <h4>Список дел</h4>
        <div class="to-do">
            <div>
                <?php
                require 'messages.php';
                notify();
                ?>
                <form action="add.php" method="POST">
                    <input type="text" name="task" id="task" class="form-control" placeholder="Нужно сделать..">
                    <input type="submit" class="btn btn-success">
                </form>
            </div>
            <div class="todo__container">
                <?php
                require 'configDB.php';

                $query = $pdo->query("SELECT * FROM `tasks` ORDER BY `id` DESC");

                echo "<ul>";

                while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                    echo "<li><a class='task_item'>$row->task</a>
                <div>
                <a  class='btn btn-warning' href='edit.php?id=$row->id'><i class='fa-solid fa-pen-to-square'></i></a>
                <a  class='btn btn-danger' href='delete.php?id=$row->id'><i class='fa-solid fa-trash-can'></i></a>
                </div>
                </li>";
                }

                echo "</ul>"
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>