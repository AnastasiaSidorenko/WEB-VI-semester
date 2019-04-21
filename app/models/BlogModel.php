<?php

include_once("app/core/BaseActiveRecord.php");
include_once('config.ini.php');

class BlogModel extends BaseActiveRecord
{
    public $id;
    public $title;
    public $body;
    public $date;
    public $image;
    public $message = "Запись опубликована";

    protected static $table='Blog';

    function __construct(){
        parent::__construct();
    }
}