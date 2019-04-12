<?php

include("app/core/BaseActiveRecord.php");
include('config.ini.php');

class RegistrationModel extends BaseActiveRecord
{
    public $id;
    public $login;
    public $fio;
    public $email;
    public $password;
    public $message = "Вы зарегистрировались в системе";

    protected static $table='Users';

    function __construct(){
        parent::__construct();
    }
}