<?php
/**
 * Created by PhpStorm.
 * User: nastya
 * Date: 3/14/19
 * Time: 11:10 AM
 */

include("app/core/Controller.php");

class InterestsController extends Controller
{
    public function index(){
        echo $this->view->render("interests.php","My interests","interests",$this->model);
    }
}