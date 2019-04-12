<?php

include_once $_SERVER['DOCUMENT_ROOT']."/app/models/validators/FormValidation.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $validator = new FormValidation();
    $validator->setRule('fio',"/^[A-zА-я]{1,}[\s][A-zА-я]{1,}[\s][A-zА-я]{1,}$/u");
    $validator->setRule('phone',"/^[+][37][0-9]{8,10}$/");
    $validator->setRule('email',"/^[A-z0-9]{1,}[@][A-z]{1,}[.][A-z]{1,}$/");
    //var_dump($_POST);
    $validator->validate($_POST,"toContact");
    echo $validator->showErrors();
}