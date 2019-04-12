<?php

include("app/core/Controller.php");

class ContactController extends Controller
{
    public function index(){
        echo $this->view->render("contact.php","Contact","contact");
    }
    public function validate(){
        $this->model->validate($_POST,"toContact");
        echo $this->view->render("validate.php","Contact","contact",$this->model);
    }
}