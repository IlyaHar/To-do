<?php

require 'configDB.php';

$task = trim(htmlspecialchars($_POST['task']));
$id = $_GET['id'];

if ($task == '') {
    setcookie('err_task', 'Введите любое задание', time() + 5);
    header('Location: /');
} elseif(mb_strlen($task) > 255) {
    setcookie('err_task', 'Cлишком большое задание', time() + 5);
    header('Location: /');
    exit;
} else {
    setcookie('err_task', 'Cлишком большое задание', time() - 5);
    setcookie('success_task', 'Вы успешно отредактировали задание!', time() + 5);

    $sql = "UPDATE `tasks` SET `task` = :task WHERE `id` = :id";
    $query = $pdo->prepare($sql);
    $query->execute(['task' => $task, 'id' => $id]);

    header('Location: /');
}

