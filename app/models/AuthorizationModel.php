<?php

include("app/core/BaseActiveRecord.php");
include('config.ini.php');

class AuthorizationModel extends BaseActiveRecord
{
    public $message;

    protected static $table='Users';

    function __construct(){
        parent::__construct();
    }
}