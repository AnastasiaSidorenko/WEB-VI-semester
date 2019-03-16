<?php
/**
 * Created by PhpStorm.
 * User: nastya
 * Date: 1/29/19
 * Time: 12:05 PM
 */

class Router
{
    static function start()
    {
        //var_dump($_REQUEST);
        $controller_name= $_REQUEST["controller"] ? $_REQUEST["controller"] : "page";
        $action_name = $_REQUEST["action"] ? $_REQUEST["action"] : "index";

        //var_dump($_REQUEST);

        $controller_file = "app/controllers/".ucfirst($controller_name ).'Controller.php';

        if(file_exists($controller_file)){
            include $controller_file; //once?
        }   else
        {
            die("Ошибка! Файл контроллера $controller_file не найден!");
        }

        $controller_class_name = ucfirst($controller_name).'Controller';
        $controller = new $controller_class_name;

        $model_name = ucfirst($controller_name).'Model';
        $model_file = "app/models/".$model_name.'.php';

        if(file_exists($model_file)){
            include $model_file;
        }else{
            die("Ошибка! Файл модели $model_file не найден!");
        }

        $model_class_name = $model_name;
        $model = new $model_class_name;

        $controller->model=$model;

        if(method_exists($controller,$action_name)){
            //$controller_file->$action_name();
            $controller->$action_name();
        } else{
            die("Ошибка! Отсутствует метод $action_name контроллера $controller_class_name");
        }
    }
}

