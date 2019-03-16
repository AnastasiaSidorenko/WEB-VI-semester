<?php
/**
 * Created by PhpStorm.
 * User: nastya
 * Date: 3/2/19
 * Time: 12:27 PM
 */
include("app/core/View.php");

class Controller
{
    public $model;
    public $view;

    function __construct(){
        $this->view = new View();
    }
}