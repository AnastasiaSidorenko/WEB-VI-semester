<?php

include("app/core/Controller.php");

class BlogController extends Controller
{
    public function index(){
        echo $this->view->render("blog.php","Blog","blog");
    }
    public function uploadEntry(){
        echo $this->view->render("upload_blog_entry.php","Blog Editor","admin/blog",$this->model,'admin/views/admin_layout.php');
    }
    /*public function uploadMessages(){
        //echo $this->view->render("upload_blog_entries.php","Uploading blog entries","blog");
    }
    public function uploadCSV(){
        //echo $this->view->render("uploadCSV.php","Uploading blog entries from CSV file","blog",);
    }*/
}