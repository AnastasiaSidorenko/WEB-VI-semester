<?php

include("app/admin/controllers/AdminController.php");

class AdminUploadFileController extends AdminController
{
    public function index(){
        echo $this->view->render("upload_file.php","Uploading feedbacks guests's book","admin/UploadFile");
    }
    public function upload(){
        echo $this->view->render("upload_file_on_server.php","Uploading feedbacks on server","admin/UploadFile");
    }
}