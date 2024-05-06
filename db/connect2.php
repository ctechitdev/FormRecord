<?php


$host = "localhost";
$user = "root";
$pass = "";
$db   = "pjprecord";
$connect = null;

try {
    $connect = new PDO("mysql:host={$host};dbname={$db};", $user, $pass);
} catch (Exception $e) {
}
$connect->exec("set names utf8");