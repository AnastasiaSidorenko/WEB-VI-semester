<?php

include("app/admin/controllers/AdminController.php");

class AdminBlogController extends AdminController
{
    public function editor(){
        echo $this->view->render("blog_editor.php","Blog Editor","blog_editor");
    }
}