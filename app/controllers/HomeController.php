<?php
/**
 * Created by PhpStorm.
 * User: nastya
 * Date: 3/2/19
 * Time: 1:09 PM
 */
include("app/core/Controller.php");

class HomeController extends Controller
{
    public function index(){
        echo $this->view->render("home_page.php","Home page","home");
    }
}