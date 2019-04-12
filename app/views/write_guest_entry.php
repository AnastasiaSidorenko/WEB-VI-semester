<?php

$file = fopen("messages.inc","a");

$text=date('d.m.y').','.$_POST['fio_guest_book'].','.$_POST['email_guest_book'].','.$_POST['message_guest_book'].';';
if(fwrite($file,$text)){
    echo "<br>Запись прошла успешно<br>";
}
else{
    echo "<br>Произошла ошибка при записи данных";
}
fclose($file);
?>
<section>
    <a href="/<?=$name_page ?>/index">Вернуться назад</a>
</section>