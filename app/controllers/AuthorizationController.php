<?php

include("app/core/Controller.php");

class AuthorizationController extends Controller
{
    public function index(){
        echo $this->view->render("authorization.php","User Authorization","authorization",$this->model);
    }
    public function validate(){
        $this->model->validate($_POST,"authorization");
        if($this->model->LogIn($_POST['login'],$_POST['password'])==1){
            $this->model->message="Вы вошли в систему";
        }
        else{
            $this->model->message="Неправильный пароль или логин";
        }
        echo $this->view->render("validate.php","User Authorization","authorization",$this->model);
    }
}