<?php

try {
    $pdo = new PDO('mysql:dbname=test; host=127.0.0.1', 'root', '');
} catch (PDOException $e) {
    die($e->getMessage());
}