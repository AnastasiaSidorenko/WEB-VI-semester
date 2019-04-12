<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        Администрирование <?=$title?>
    </title>
    <link href="/public/assets/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gabriela|Roboto+Slab" rel="stylesheet">
    <script src="/public/assets/js/DateAndTime.js"></script>
    <script src="/public/assets/js/jquery-3.3.1.js"></script>
</head>
<body>

<header><nav>
        <ul class="menu">
            <li><a href="/admin/uploadFile/index">Upload feedbacks</a></li>
            <li><a href="/admin/blog/editor">Blog Editor</a></li>
            <li><a href="/admin/statistics/index" >Visitor's statistics</a></li>
        </ul>
        <span id="time"><script>ShowDate();</script></span>
    </nav></header>
<h2>Администратор</h2>

<?php
include 'app/admin/views/'.$content_view;
?>
<div>
    <script>LocalStorage("<?=$name_page ?>");</script>
    <script>setCookie("<?=$name_page ?>");</script>
</div>
</body>
</html>
