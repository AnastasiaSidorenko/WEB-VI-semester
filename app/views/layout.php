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
</head>
 <body>
    <?php
    include 'app/views/'.$content_view;
    ?>
    <div>
         <script>LocalStorage("<?=$name_page ?>");</script>
         <script>setCookie("<?=$name_page ?>");</script>
    </div>
</body>
</html>
