<?php

$dsn='mysql:dbname=website;hostname=127.0.0.1';
$username='Eliya';
$password='Ei<re>na';
try{
    BaseActiveRecord::$pdo = new PDO($dsn,$username,$password,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
}
catch(PDOException $exc){
    echo 'Подключение не установлено: '.$exc->getMessage();
}