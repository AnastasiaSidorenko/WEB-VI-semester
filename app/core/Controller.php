<?php

include("app/core/View.php");

class Controller
{
    public $model;
    public $view;

    function __construct(){
        $this->view = new View();
    }
}