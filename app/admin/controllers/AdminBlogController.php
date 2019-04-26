<?php

include("app/admin/controllers/AdminController.php");
include_once $_SERVER['DOCUMENT_ROOT']."/app/models/CommentModel.php";
include_once $_SERVER['DOCUMENT_ROOT']."/app/models/BlogModel.php";

class AdminBlogController extends AdminController
{
    public function editor(){
        parent::authenticate();
        echo $this->view->render("blog_editor.php","Blog Editor","blog_editor");
    }
    public function edit_entry(){
        $html = new DOMDocument();
        $html->loadHTML($_GET['modifs']);
        $blog = new BlogModel();

        $ti=$html->getElementByID('title');
        $title=$ti->nodeValue;

        $te=$html->getElementByID('text');
        $text=$te->nodeValue;

        $i=$html->getElementByID('id');
        $id=$i->nodeValue;

        $blog->id=$id;
        if($title){
            $blog->title=$title;
        }
        if($text){
            $blog->body=$text;
        }
        $blog->save();
        echo "1";
        exit;
    }
}