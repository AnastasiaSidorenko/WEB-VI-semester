<?php
/**
 * Created by PhpStorm.
 * User: nastya
 * Date: 3/14/19
 * Time: 11:09 AM
 */
include("app/core/Controller.php");


class AboutController extends Controller
{
    public function index(){
        echo $this->view->render("about_me.php","About me","about");
    }
}