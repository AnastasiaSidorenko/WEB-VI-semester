<?php

include_once $_SERVER['DOCUMENT_ROOT']."/app/core/BaseActiveRecord.php";
include_once $_SERVER['DOCUMENT_ROOT'].'/config.ini.php';

class CommentModel extends BaseActiveRecord
{
    public $id;
    public $date_time;
    public $author;
    public $comment;
    public $entry;
    //public $message = "Запись опубликована";

    protected static $table='Blog_Comments';

    function __construct(){
        parent::__construct();
    }
}