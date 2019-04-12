<?php
session_start()
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        Personal site of Sidorenko Anastasiia. <?=$title?>
    </title>
    <link href="/public/assets/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gabriela|Roboto+Slab" rel="stylesheet">
    <script src="/public/assets/js/InteractiveMenu.js"></script>
    <script src="/public/assets/js/DateAndTime.js"></script>
    <link href="/public/assets/css/calendar.css" rel="stylesheet">
    <script src="/public/assets/js/Calendar.js"></script>
    <script src="/public/assets/js/history.js"></script>
    <script src="/public/assets/js/jquery-3.3.1.js"></script>
    <script src="/app/gather_statistics.php"></script>
</head>
 <body>

 <header><nav>
         <ul class="menu">
             <li><a href="/home/index" >Home page</a></li>
             <li><a href="/about/index">About me</a></li>
             <li><p id="int_item" class="menu-item" OnClick="Toggle()">
                     My Interests</p>
                 <script>SubMenu();</script>
             </li>
             <li><a href="/gallery/index">Gallery</a></li>
             <li><a href="/studies/index">Studies</a></li>
             <li><a href="/contact/index"">Contact</a></li>
             <li><a href="/test/index">Test</a></li>
             <li><a href="/history/index">Browsing history</a></li>
             <li><a href="/guestBook/index">Guest book</a></li>
             <li><a href="/blog/index">Blog</a></li>
             <li><a href="/registration/index">Sign Up</a></li>
             <?php if(isset($_SESSION['FIO'])){
                 echo '<li><a href="/quit/index">Log Out</a></li>';
             }
             else{
                 echo '<li><a href="/authorization/index">Log In</a></li>';
             }
             ?>
         </ul>
         <span id="time"><script>ShowDate();</script></span>

     </nav></header>
 <?php
 //if(isset($_SESSION['FIO'])){echo "<div class=\"user_fio_greeting\"><p>Пользователь: ".$_SESSION['FIO']."</div>";}
if(isset($_SESSION['FIO'])){echo "<div class='user_fio'><span>Вы вошли как: ".$_SESSION['FIO']."</span></div>";}
include 'app/views/'.$content_view;
include_once $_SERVER['DOCUMENT_ROOT'] . '/app/models/StatisticModel.php';
 $visit = new StatisticModel();
 $visit->save_statistics($title);
?>
    <div>
         <script>LocalStorage("<?=$name_page ?>");</script>
         <script>setCookie("<?=$name_page ?>");</script>
    </div>
</body>
</html>
