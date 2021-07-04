<?php
$connect = new PDO("mysql:host=localhost;dbname=goloshubov_lab2", 'root','root');
function SendToDb($connect) {

    $query = "INSERT INTO countries VALUES (NULL, :country, :currency, :climate, :visa)";
    $msg = $connect->prepare($query);
    $msg->execute(['country' => $_POST['country'], 'currency' => $_POST['currency'], 'climate' => $_POST['climate'], 'visa' => $_POST['visa']]);
};
if ($_POST)
SendToDb($connect);
header('Location: new.php');