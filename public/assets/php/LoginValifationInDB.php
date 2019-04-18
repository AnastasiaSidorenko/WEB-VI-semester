<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/app/core/BaseActiveRecord.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/confin.ini.php";
    $login=$_POST['login'];
        if (!$login){
            echo "Заполните логин";
        }
        else return '1';
