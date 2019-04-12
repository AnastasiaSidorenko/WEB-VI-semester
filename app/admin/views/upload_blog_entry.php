<?php
    $model->validate($_POST,"Create_Blog_Entry");

    if($model->validator->GetErrorsQuantity()==0) {
        $blog_entry = new BlogModel();
        $blog_entry->title = $_POST['blog_entry_title'];
        $blog_entry->body = $_POST['blog_entry_text'];
        $blog_entry->date = date('Y-m-d')." ".date("H:i");
        if (($_FILES["image"]["type"] == "image/gif")
            || ($_FILES["image"]["type"] == "image/jpeg")
            || ($_FILES["image"]["type"] == "image/png")
            || ($_FILES["image"]["type"] == "image/pjpeg")){
            if ($source = $_FILES["image"]["tmp_name"]) {
                $dest = $_FILES["image"]["name"];
                if(copy($source, "uploads/".$dest)) {
                    $blog_entry->image = $_FILES["image"]["name"];
                    echo "Файл успешно загружен";
                } else {
                    echo "Ошибка загрузки файла";
                }
            }
        }
        $blog_entry->save();
    }
    else echo $model->validator->showErrors();
?>
<section>
    <a href="/<?=$name_page ?>/editor">Вернуться назад</a>
</section>