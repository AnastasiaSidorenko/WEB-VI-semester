<form name="Create_Guest_Entry" method="post" action="validate">
			<fieldset class="form1">
				<legend>Контактная информация</legend>
				<p><label id="label_fio">Фамилия Имя Отчество </label><input type="text" size="40" name="fio_guest_book" id="fio_guest_book">
				<p><label>email </label><input type="email" id="email_guest_book" name="email_guest_book" size="30"></p>
			</fieldset>
			<fieldset>
				<legend>Ваше сообщение:</legend>
				<textarea name="message_guest_book" id="message_guest_book" rows=10 cols=60></textarea>
			</fieldset>
			<p>
			<input type="submit" id="submit" value="Отправить">
			<input type="reset" value="Очистить форму">
			</p>
</form>
    <?php
        $f = file_get_contents("messages.inc");
        $feedbacks = explode(";",$f);
        $feedbacks_reverse = array_reverse($feedbacks);
        echo "<div class='studies'>";
        echo "<table>";
            echo "<TR>";
                echo "<TD>";
                    echo "Дата";
                echo "</TD>";
                echo "<TD>";
                    echo "ФИО";
                echo "</TD>";
                echo "<TD>";
                    echo "email";
                echo "</TD>";
                echo "<TD>";
                    echo "Отзыв";
                echo "</TD>";
            echo "</TR>";
    foreach($feedbacks_reverse as $value)   {
        $feedback=explode(",",$value);
        if(count($feedback)!=4)  {
            continue;
        }
        else{
            echo "<TR>";
                echo "<TD>";
                    echo "$feedback[0]";
                echo "</TD>";
                echo "<TD>";
                    echo "$feedback[1]";
                echo "</TD>";
                echo "<TD>";
                    echo "$feedback[2]";
                echo "</TD>";
                echo "<TD>";
                    echo "$feedback[3]";
                echo "</TD>";
            echo "</TR>";
        }
    }
    echo "</table>";
    echo "</div>";
    ?>

