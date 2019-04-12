<?php

include("app/core/Controller.php");

class RegistrationController extends Controller
{
    public function index(){
        echo $this->view->render("registration.php","User Registration","registration",$this->model);
    }

    public function validate(){
        $this->model->validate($_POST,"registration");
        if($this->model->findLogin($_POST['login'])==0 && $this->model->validator->GetErrorsQuantity()==0){
            $this->model->login=$_POST['login'];
            $this->model->fio=$_POST['fio'];
            $this->model->email=$_POST['email'];
            $this->model->password=password_hash($_POST['password'],PASSWORD_DEFAULT);
            $this->model->save();
        }
        else{
            $this->model->validator->setError("login","Данный логин занят");
        }
        echo $this->view->render("validate.php","User Registration","registration",$this->model);
    }
}