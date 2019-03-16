<?php
/**
 * Created by PhpStorm.
 * User: nastya
 * Date: 3/14/19
 * Time: 11:09 AM
 */

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