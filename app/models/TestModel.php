<?php

include("app/core/BaseActiveRecord.php");
include("app/models/validators/ResultsVerification.php");
include('config.ini.php');

class TestModel extends BaseActiveRecord
{
   public $id;
   public $date;
   public $fio;
   public $group;
   public $question1;
   public $question2;
   public $question3;
   public $answer1;
   public $answer2;
   public $answer3;
   public $message = "Вы успешно прошли тест";

   protected static $table='Test';

    function __construct(){
        parent::__construct();
        $this->validator = new ResultsVerification();
    }
}