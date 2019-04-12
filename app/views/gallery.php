 <div>
        <?php
        include $_SERVER['DOCUMENT_ROOT']."/public/assets/php/gallery_script.php";
        show_gallery($model->GetPhotos(),$model->GetTitles());
        ?>
    </div>