<?php
/**
 * Created by PhpStorm.
 * User: nastya
 * Date: 3/2/19
 * Time: 12:28 PM
 */

class View
{
    function render($content_view, $title,$name_page, $model = NULL, $layout = 'views/layout.php'){
        include 'app/'.$layout;
    }
}
