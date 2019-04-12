<?php

include("app/admin/controllers/AdminController.php");
include("app/models/StatistiсModel.php");

class AdminStatisticsController extends AdminController
{
    public function index(){
        echo $this->view->render("statistics.php","Visitor's statistics","admin/statistics");
    }
}