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