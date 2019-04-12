<?php

class View
{
    function render($content_view, $title,$name_page, $model = NULL, $layout = 'admin_layout.php'){
        include 'app/admin/views/'.$layout;
    }
}