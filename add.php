<?php
//обработка данных и их добавление в БД
    $task = $_POST['task'];
    if ($task == '') {
        echo 'Введите само задание';
        exit();
    }

    require 'configDB.php';

    $sql = 'INSERT INTO tasks(task) VALUES(:task)'; //здесь мы просто создаем sql-команду
    $query = $pdo->prepare($sql); //подготавливаем добавление

    $query->execute(['task' => $task]); //добавление данных к БД

    header('Location: /');


