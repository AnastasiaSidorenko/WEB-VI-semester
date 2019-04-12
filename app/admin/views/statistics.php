<?php
$max_page=5;
//include_once $_SERVER['DOCUMENT_ROOT']."/app/models/StatisticModel.php";

$per_page=5;
$quantity=StatisticModel::countRecords();

$page=(int)(isset($_GET['page'])?($_GET['page']-1):0);

$start = abs($page*$per_page);

$data = StatisticModel::getRecords($start,$per_page);

if($data) {
    echo "<div class='flex_stretch_table'>";
        echo "<table>";
            echo "<TR>";
                echo "<TD>дата</TD>";
                echo "<TD>веб-страница</TD>";
                echo "<TD>IP-адрес</TD>";
                echo "<TD>имя хоста</TD>";
                echo "<TD>браузер</TD>";
                echo "</TR>";
        foreach($data as $value){
            echo "<TR>";
                echo "<TD>$value->date_time</TD>";
                echo "<TD>$value->web_page</TD>";
                echo "<TD>$value->IP</TD>";
                echo "<TD>$value->host_name</TD>";
                echo "<TD>$value->browser</TD>";
            echo "</TR>";
    }
    echo "</table>";
    echo "</div>";

    $num_pages = ceil($quantity/$per_page);

    echo '<div style="text-align: center;"><p>Всего страниц: '.$num_pages."</p></div>";
    echo '<div class="blog_num_links">';

    //echo "$page";
    // echo " Что в строке: ".($page+1);
    if($page<($num_pages-2)){
        if($page>1){
            $i_start=-2;
            $i_end=3;
        }
        if($page==0){
            $i_start=0;
            $i_end=5;
        }
        if($page==1){
            $i_start=-1;
            $i_end=4;
        }
    }
    else{
        if($page==($num_pages-2)){
            $i_start=-3;
            $i_end=2;
        }
        if($page==($num_pages-1)){
            $i_start=-4;
            $i_end=1;
        }
    }

//    if($page!=0) {
//        echo "<div><p>" . '<a href="/statistics/index?page=' . ($page) . '"><-Previous</a>' . "</p></div>";
//    }
//    else{
//        echo "<div><p><-Previous</p></div>";
//    }

//        echo "<TR>";
//        echo "<TD>";
//        echo "$value->date";
//        echo "</TD>";
//        echo "<TD>";
//        echo "$value->fio";
//        echo "</TD>";
//        echo "<TD>";
//        echo "$value->group";
//        echo "</TD>";
//        echo "<TD>";
//        echo "$value->question1";
//        echo "</TD>";
//        echo "<TD>";
//        echo "$value->question2";
//        echo "</TD>";
//        echo "<TD>";
//        echo "$value->question3";
//        echo "</TD>";
//        echo "</TR>";

    for($i=$i_start; $i<$i_end; $i++){
        //echo "$i";
        if($i!=0){
            echo "<div><p>".'<a href="/admin/statistics/index?page='.($page+$i+1).'">'.($page+$i+1).'</a>'."</p></div>";
        }
        else{
            echo "<div><p>".($page+1)."</p></div>";
        }
    }

//    if($page!=($num_pages-1)) {
//        echo "<div><p>" . '<a href="/statistics/index?page=' . ($page + 2) . '"> Next-></a>' . "</p></div>";
//    }
//    else{
//        echo "<div><p> Next-></p></div>";
//    }

    echo "</div>";
}
else{ echo "<h3>No statistics</h3>";}
?>