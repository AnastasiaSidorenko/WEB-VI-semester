<?php

include("app/admin/controllers/AdminController.php");

class AdminAuthorizationController extends AdminController
{
    public function index(){
        if(isset($_SESSION['isAdmin'])){
            header('Location:/admin/blog/editor');
            exit;
        }
        echo $this->view->render("authorization.php","Admin Authrorization","authorization");
    }
    public function auth(){
        if(isset($_SESSION['isAdmin'])){
            header('Location:/admin/blog/editor');
            exit;
        }
        if($_POST['login']=='admin' && password_verify($_POST['password'],'$2y$10$Pno2oD6xfp95AvcbgO8raeh1M/egCEfaICrekidNwlR0DMySgOoB.')){
            $_SESSION['isAdmin']=1;
            header('Location:/admin/blog/editor');
            exit;
        } else{
            header('Location:/admin/authorization/index');
            exit;
        }
    }
    public function out(){
        session_destroy();
        header('Location:/admin/authorization/index');
        exit;
    }
}