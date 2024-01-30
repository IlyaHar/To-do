<?php
require 'configDB.php';

$id = $_GET['id'];

if ($id) {
    setcookie('err_task', 'Cлишком большое задание', time() - 5);
    setcookie('success_task', 'Вы успешно добавили задание!', time() - 5);
    setcookie('del_task','Задание было удалено!', time() + 5);

    $sql = "DELETE FROM `tasks` WHERE `id` = :id";
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);

    header('Location: /');
}
