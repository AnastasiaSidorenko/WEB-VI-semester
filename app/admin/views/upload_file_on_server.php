<?php
    $source = $_FILES["feedbacks"]["tmp_name"];
    $dest = $_FILES["feedbacks"]["name"];
    if(copy($source,$dest)){
        echo "Файл успешно загружен";
    }
    else{
        echo "Ошибка загрузки файла";
    }

?>
<section>
    <a href="/<?=$name_page ?>/index">Вернуться назад</a>
</section>