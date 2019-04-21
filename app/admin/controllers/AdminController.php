<?php
session_start();
include("app/admin/views/View.php");
include("app/models/StatisticModel.php");

class AdminController
{
    public $model;
    public $view;

    function __construct(){
        $this->view = new View();
        $this->model = new StatisticModel();
    }
    function authenticate(){
        if(!isset($_SESSION['isAdmin'])){
             header('Location:/admin/authorization/index');
             exit;
        }
        return 1;
    }
}