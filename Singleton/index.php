<?php

require 'DatabaseConnection.php';

try {

    $connection = DatabaseConnection::getInstance();

} catch (Exception $exception) {
    var_dump($exception->getMessage());

    die;
}

echo '<pre>';
print_r($connection->query('SELECT * FROM test')->fetchAll());
die;
