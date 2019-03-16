<?php
/**
 * Created by PhpStorm.
 * User: nastya
 * Date: 3/14/19
 * Time: 11:09 AM
 */

include("app/core/Controller.php");

class GalleryController extends Controller
{
    public function index(){
        echo $this->view->render("gallery.php","Фотоальбом","gallery",$this->model);
    }
}