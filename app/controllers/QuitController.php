<?php

include("app/core/Controller.php");

class QuitController extends Controller
{
    public function index(){
        echo $this->view->render("quit.php","Log Out","quit");
    }
}