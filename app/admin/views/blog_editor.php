<script type='text/javascript' language='javascript' src="/public/assets/js/Blog_Entry_Editor.js"></script>
<form name="Create_Blog_Entry" method="post" action="/blog/uploadEntry" enctype="multipart/form-data">
    <fieldset class="form1">
        <legend>Создание записи блога</legend>
                <p><label>Тема сообщения </label><input type="text" size="80" name="blog_entry_title" id="blog_entry_title"></p>
                <p><label>Изображение </label><input type="file" name="image"></p>
				<p><label>Текст записи </label></p>
                <textarea name="blog_entry_text" id="blog_entry_text" rows=20 cols=80></textarea>
    </fieldset>
            <p>
			<input type="submit" id="submit" value="Отправить">
			<input type="reset" value="Очистить форму">
			</p>
</form>

<?php
$max_page=5;
$per_page=3;

$quantity=BlogModel::countRecords();

$page=(int)(isset($_GET['page'])?($_GET['page']-1):0);

$start = abs($page*$per_page);

$blog_entries = BlogModel::getRecords($start,$per_page);
$blog_comments = CommentModel::findAll();
if($blog_entries) {
    foreach ($blog_entries as $value) {
        //var_dump($key);
        echo "<div class='blog_entry' id='blog_entry_".$value->id."'>";
        echo "<div class='title_blog' ><p>$value->date</p>
                <h2 id='blog_title".$value->id."'>$value->title</h2></div>";
        echo "<div class='blog'>";
        if ($value->image) {
            echo "<div class='blog_photo decor-photo'><img src='/uploads/$value->image' alt='Здесь должная быть картинка'></div>";
        }
        echo "<div class='blog_body' id='blog_text_". $value->id. "'><p>" . $value->body . "</p></div>";
        echo "</div>";

        echo "<button class='edit_entry' id='$value->id' onClick=\"GenerateEditDiv($value->id)\"> Редактировать запись </button>";

        echo "</div>";
        $entry_id=$value->id;

        echo "<div id='comments".$entry_id."'>";
        if(is_array($blog_comments)) {
            echo "<span>Комментарии:</span>";
            foreach ($blog_comments as $smth) {
                if ($entry_id == $smth->entry) {
                    echo "<div class='comment'>";
                    echo "<div class='comment_a_t'><p>$smth->date_time
                    <span class='comment_a'>$smth->author</span></p></div>";
                    echo "<div>$smth->comment</div>";
                    echo "</div>";
                }
            }
        }
        echo "</div>";
        echo "<hr>";
    }
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

    if($page!=0) {
        echo "<div><p>" . '<a href="/admin/blog/editor?page=' . ($page) . '"><-Previous</a>' . "</p></div>";
    }
    else{
        echo "<div><p><-Previous</p></div>";
    }

    for($i=$i_start; $i<$i_end; $i++){
        // echo "$i";
        if($i!=0){
            echo "<div><p>".'<a href="/admin/blog/editor?page='.($page+$i+1).'">'.($page+$i+1).'</a>'."</p></div>";
        }
        else{
            echo "<div><p>".($page+1)."</p></div>";
        }
    }

    if($page!=($num_pages-1)) {
        echo "<div><p>" . '<a href="/admin/blog/editor?page=' . ($page + 2) . '"> Next-></a>' . "</p></div>";
    }
    else{
        echo "<div><p> Next-></p></div>";
    }

    echo "</div>";
}
else{ echo "<h3>No entries</h3>";}