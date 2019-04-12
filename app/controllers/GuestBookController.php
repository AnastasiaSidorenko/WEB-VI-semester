<?php

include("app/core/Controller.php");

class GuestBookController extends Controller
{
    public function index(){
        echo $this->view->render("guest_book.php","Guest Book","guestBook");
    }
    public function validate(){
        $this->model->validate($_POST,"Create_Guest_Entry");
        echo $this->view->render("write_guest_entry.php","Guest Book","guestBook");
    }
}