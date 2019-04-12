	<main class="block">
        <?php include $_SERVER['DOCUMENT_ROOT']."/public/assets/php/contact_validation.php";?>
		<form name="ToContact" method="post" action="validate">
			<fieldset class="form1">
				<legend>Контактная информация</legend>
				<p><label id="label_fio">Фамилия Имя Отчество </label><input type="text" size="40" name="fio" id="fio">
				<p><label>Дата рождения </label><input type="text" id="date" name="date" onclick="showcalendar(this)" readonly="true">
				<p><label>Пол: </label>
					<input name="sex" type="radio" id="sex" value="male">Мужской
					<input name="sex" type="radio" id="sex" value="female">Женский
				</p>
				<p><label>Возраст</label>
				<select name="age" id="age">
					<option selected disabled value="none">Укажите ваш возраст</option>
					<option value="10-">10-</option>
					<option value="11-16">11-16</option>
					<option value="17-22">17-22</option>
					<option value="23-28">23-28</option>
					<option value="29-34">29-34</option>
					<option value="35-40">35-40</option>
					<option value="41-46">41-46</option>
					<option value="47-52">47-52</option>
					<option value="53-58">53-58</option>
					<option value="59-64">59-64</option>
					<option value="65-70">65-70</option>
					<option value="70+">70+</option>
				</select></p>
				<p><label>email </label><input type="email" id="email" name="email" size="30"></p>
				<p><label>phone </label><input type="phone" id="phone" name="phone" size="30"></p>
			</fieldset>
			<fieldset>
				<legend>Ваше сообщение:</legend>
				<textarea name="message" id="message" rows=10 cols=60></textarea>
			</fieldset>
			<p>
			<input type="submit" id="submit" value="Отправить">
                <input type="reset" value="Очистить форму">
			</p>
		</form>
	</main>