<?php

include("app/core/Controller.php");

class InterestsController extends Controller
{
    public function index(){
        echo $this->view->render("interests.php","My interests","interests",$this->model);
    }
}