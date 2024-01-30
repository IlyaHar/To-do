<?php
$taskId = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактировани задания</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>

<body>
    <div class="container">
        <h4>Редактировани задания</h4>
        <div class="to-do">
            <div>
                <form action='checkEdit.php?id=<?= $taskId ?>' method="POST">
                    <input type="text" name="task" id="task" class="form-control" placeholder="Измените задание..">
                    <input type="submit" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>