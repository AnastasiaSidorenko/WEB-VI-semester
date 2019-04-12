<?php
function make_stat($title){
include $_SERVER['DOCUMENT_ROOT'] . "/app/models/StatisticModel.php";
$visit = new StatisticModel();
$visit->save_statistics($title);
var_dump($visit);
echo "yes!";
}
?>
