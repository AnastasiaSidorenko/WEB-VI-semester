<?php

include("app/core/Controller.php");
include_once("/public/assets/js/Blog_Comment_Script.js");

class BlogController extends Controller
{
    public function index()
    {
        echo $this->view->render("blog.php", "Blog", "blog");
    }

    public function uploadEntry()
    {
        echo $this->view->render("upload_blog_entry.php", "Blog Editor", "admin/blog", $this->model, 'admin/views/admin_layout.php');
    }

    /*public function uploadMessages(){
        //echo $this->view->render("upload_blog_entries.php","Uploading blog entries","blog");
    }
    public function uploadCSV(){
        //echo $this->view->render("uploadCSV.php","Uploading blog entries from CSV file","blog",);
    }*/
    public function send_comment_ajax()
    {
        include_once $_SERVER['DOCUMENT_ROOT'] . "/app/models/CommentModel.php";
        session_start();
        if (isset($_GET['xml'])) {
            $xml = simplexml_load_string($_GET['xml']) or die("Error: Cannot create object");
            $comment = new CommentModel();

            $FIO = $_SESSION['FIO'];
            $date_time = date('Y-m-d') . " " . date("H:i");
            $text = $xml->text[0];

            //var_dump($value);
            $comment->date_time = $date_time;
            $comment->author = $FIO;
            $comment->comment = $text;
            $comment->entry = $xml->entry_id[0];

            if ($comment->save()) {
                $err_Code = 'no';
                $err_Message = 'Комментарий добавлен';
            } else {
                $err_Code = 'yes';
                $err_Message = 'Комментарий не отправлен';
            }
            /*$xml_string = "<return_data>"+"<entry_id>"+$comment->entry+"</entry_id>"+"<err_Message>"+$err_Message+"</err_Message>"+
            "<err_Code>"+$err_Code+"</err_Code>"+"<FIO>"+$FIO+"</FIO>"+"<date_time>"+$date_time+"</date_time>"+"<text>"+$text+"</text>"+"</return_data>";

            header('Content-Type: text/xml');
            echo "showResult($xml_string)";*/

            //echo "<script type='application/javascript'>showResult($xml_string);</script>";
            //echo "<script type='text/javascript'>test();</script>";
            //echo "<script>showResult($xml_string);</script>";
           // $callback=$_GET['callback'];
            //echo $callback($xml_string);
            //echo "showResult($xml_string)";

            $data = ['entry_id'=>$comment->entry,'err_Message'=>$err_Message,'err_Code'=>$err_Code,'FIO'=>$FIO,'date_time'=>$date_time,'text'=>$text];

            header('Content-Type: text/javascript,application/json');
            $data=json_encode($data);
            echo "showResult($data)";
            exit;
        }
    }
}
