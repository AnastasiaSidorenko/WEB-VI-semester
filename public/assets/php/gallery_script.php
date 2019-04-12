<?php

function show_gallery(array $photos,array $titles){
    $counter_photos = 0;
    $q=0;
    $directory="/public/assets/img/";
    echo "<div class=\"photoalbum\"><table>";
    for ($i = 0; $i < 5; $i++) {
        echo "<TR class=\"photoalbum\">";
        for ($j = 0; $j < 3; $counter_photos++, $j++, $q++) {
            $path=$directory.$photos[$counter_photos];
            $number_photo=($counter_photos + 1);
            echo "<TD class=\"table_row\"><img src=\"$path\" alt=\"Здесь должно быть фото $number_photo \" title=\"".$titles[$counter_photos]."\"></TD>";
        }
        $k=$q-3;
        echo "<TR class=\"photoalbum\">";
        for ($j = 0; $j < 3; $k++,$j++) {
            echo "<TD class=\"table_row\">".$titles[$k]."</TD>";
        }
    }
    echo "</table></div>";
}





