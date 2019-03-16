<?php
/**
 * Created by PhpStorm.
 * User: nastya
 * Date: 3/13/19
 * Time: 5:45 PM
 */
include("app/core/Model.php");

class GalleryModel extends Model
{
public $titles=["Цветы на стене Воронцовского дворца","Чёрное море","Трава в октябре","Я в Ялте","Воронцовский дворец(Алупка)","Пустыня Негев(Израиль)",
"на Набережной Севастополя","Памятник затопленным кораблям","на Херсонесе","Фиолент","Я возле роз","Роза","У аэропорта в Симферополе","Цветущая вишня",
"Петунии в Ноябрьске"];
public $photos=["01.png","02.png","03.png","11.png","12.png","13.png","21.png","22.png","23.png","31.png","32.png","33.png","41.png","42.png","43.png"];
public $extanded=["01.jpg","02.jpg","03.jpg","11.jpg","12.jpg","13.jpg","21.jpg","22.jpg","23.jpg","31.jpg","32.jpg","33.jpg","41.jpg","42.jpg","43.jpg"];

    function show_gallery(){
        $counter_photos = 0;
        $q=0;
        $directory="/public/assets/img/";
        echo "<div class=\"photoalbum\"><table>";
        for ($i = 0; $i < 5; $i++) {
            echo "<TR class=\"photoalbum\">";
            for ($j = 0; $j < 3; $counter_photos++, $j++, $q++) {
                $path=$directory.$this->photos[$counter_photos];
                $number_photo=($counter_photos + 1);
                echo "<TD class=\"table_row\"><img src=\"$path\" alt=\"Здесь должно быть фото $number_photo \" title=\"".$this->titles[$counter_photos]."\"></TD>";
            }
            $k=$q-3;
            echo "<TR class=\"photoalbum\">";
            for ($j = 0; $j < 3; $k++,$j++) {
                echo "<TD class=\"table_row\">".$this->titles[$k]."</TD>";
            }
        }
        echo "</table></div>";
    }
}