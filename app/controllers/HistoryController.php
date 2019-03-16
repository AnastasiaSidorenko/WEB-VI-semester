<?php
/**
 * Created by PhpStorm.
 * User: nastya
 * Date: 3/14/19
 * Time: 11:09 AM
 */

include("app/core/Controller.php");

class HistoryController extends Controller
{
    public function index(){
        echo $this->view->render("history.php","История просмотра",null);
    }
}