<?php
session_start()
?>
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
            <?php if(isset($_SESSION['isAdmin'])){
                echo '<li><a href="/admin/authorization/out">Log Out</a></li>';
            }
            else{
                echo '<li><a href="/admin/authorization/index">Log In</a></li>';
            }
            ?>
        </ul>
        <span id="time"><script>ShowDate();</script></span>
    </nav></header>
<h2>Администратор</h2>

<?php
    include 'app/admin/views/' . $content_view;
?>
</body>
</html>
