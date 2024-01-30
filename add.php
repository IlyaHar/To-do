<?php

$task = trim(htmlspecialchars($_POST['task']));

if ($task == '') {
    setcookie('err_task', 'Введите любое задание', time() + 5);
    header('Location: /');
    exit;
} elseif(mb_strlen(trim($task)) > 255) {
    setcookie('err_task', 'Cлишком большое задание', time() + 5);
    header('Location: /');
    exit;
} else {
    setcookie('err_task', 'Cлишком большое задание', time() - 5);
    setcookie('success_task', 'Вы успешно добавили задание!', time() + 5);
    
    require 'configDB.php';

    $sql = "INSERT INTO `tasks` (`task`) VALUES (:task)";
    $query = $pdo->prepare($sql);
    $query->execute(['task' => $task]);

    header('Location: /');
}
