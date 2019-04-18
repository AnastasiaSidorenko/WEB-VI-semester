<?php

include_once("app/core/BaseActiveRecord.php");
include_once('config.ini.php');

class CommentModel extends BaseActiveRecord
{
    public $id;
    public $date_time;
    public $author;
    public $date;
    public $entry;
    //public $message = "Запись опубликована";

    protected static $table='Blog_Comments';

    function __construct(){
        parent::__construct();
    }
}