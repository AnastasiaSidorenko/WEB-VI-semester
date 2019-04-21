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
        if (isset($_POST['submit'])) {
            $entry = new $this->model();
            $id=$_POST['entry_id'];

            if($_POST['blog_entry_title']) {
                $entry->title = $_POST['blog_entry_title'];
            }
            if($_POST['blog_entry_text']) {
                $entry->body = $_POST['blog_entry_text'];
            }
            $entry->update($id);
            header('Content-Type: text/html');
            //echo "showResult($xml_string)";*/

            //echo "<script type='application/javascript'>showResult($xml_string);</script>";
            //echo "<script type='text/javascript'>test();</script>";
            //echo "<script>showResult($xml_string);</script>";
            // $callback=$_GET['callback'];
            //echo $callback($xml_string);
            //echo "showResult($xml_string)";

           // $data = ['entry_id'=>$comment->entry,'err_Message'=>$err_Message,'err_Code'=>$err_Code,'FIO'=>$FIO,'date_time'=>$date_time,'text'=>$text];

            header('Content-Type: text/javascript,application/json');
            //$data=json_encode($data);

            echo "parent.alert(smth)";
            exit;
        }
        else{
            echo "parent.alert(no smth)";
        }
    }
}