<?php
 include_once $_SERVER['DOCUMENT_ROOT']."/app/core/BaseActiveRecord.php";
include $_SERVER['DOCUMENT_ROOT'].'/config.ini.php';

class StatisticModel extends BaseActiveRecord
{
    public $id;
    public $date_time;
    public $web_page;
    public $IP;
    public $host_name;
    public $browser;

    protected static $table='Statistics';

    function __construct(){
        parent::__construct();
    }

    function save_statistics($page){
        $this->date_time = date('Y.d.m. h:m:s');
        $this->web_page = $page;
        $this->IP = $_SERVER['REMOTE_ADDR'];
        $this->host_name = gethostbyaddr($_SERVER['REMOTE_ADDR']);
        $this->browser = $_SERVER['HTTP_USER_AGENT'];
        $this->save();
    }
}