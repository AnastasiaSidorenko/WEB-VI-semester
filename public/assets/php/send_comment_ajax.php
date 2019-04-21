<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT']."/app/models/CommentModel.php";

if(isset($_REQUEST['xml'])) {
    var_dump($_REQUEST['txml']);
    $xml = simplexml_load_string($_REQUEST['xml']) or die("Error: Cannot create object");
    print_r($xml);
    $comment = new CommentModel();

    $FIO=$_SESSION['FIO'];
    $date_time=date('Y-m-d') . " " . date("H:i");
    $text=$xml['text'];

    $comment->date_time = $date_time;
    $comment->author = $FIO;
    $comment->comment = $text;
    $comment->entry = $xml['entry_id'];
    if($comment->save()) {
        echo 'var err_Code=false';
        echo 'var err_Message=Сообщение отправлено';
    }
    else{
        echo 'var errCode=true';
        echo 'var err_Message=Комментарий не отправлен';
    }
    echo "showResult($comment->entry,err_Message,err_Code,$FIO,$date_time,$text)";
}