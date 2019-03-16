<?php
/**
 * Created by PhpStorm.
 * User: nastya
 * Date: 3/14/19
 * Time: 11:10 AM
 */

include("app/core/Controller.php");

class StudiesController extends Controller
{
    public function index(){
        echo $this->view->render("studies.php","Учеба","studies");
    }
}