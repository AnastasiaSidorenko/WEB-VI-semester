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
        if($_POST['login']=='admin' && password_verify($_POST['password'],'$2y$10$IoB.PqSLp67n/90JqO0eHO4uqAPJUAPttIrUXWNNL9jXFcHuS30aK')){
            $_SESSION['isAdmin']=1;
        }
        else{
            $_SESSION['isAdmin']=0;
        }
        header('Location:/admin/blog/editor');
        exit;
    }
    public function out(){
        session_destroy();
        header('Location:/admin/authorization/index');
        exit;
    }
}