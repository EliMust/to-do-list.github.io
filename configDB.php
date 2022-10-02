<?php
//подключение к БД
$dsn = 'mysql:host=localhost; dbname=to-do';
$pdo = new PDO($dsn, 'root', ''); //на удаленном хостинге провайдер выдает эти данные