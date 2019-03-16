<header><nav>
		<ul class="menu" id="menu" value="6">
            <li><a href="/home/index" id="0" onMouseOver="MouseOver(id)" onMouseOut="Revert()">Home page</a></li>
            <li><a href="/about/index" id="1" onMouseOver="MouseOver(id)" onMouseOut="Revert()">About me</a></li>
            <li><p id="2" class="menu-item" onMouseOver="MouseOver(id)" onMouseOut="Revert()" OnClick="Toggle()">
                    My Interests</p>
                <script>SubMenu();</script>
            </li>
            <li><a href="/gallery/index" id="3" onMouseOver="MouseOver(id)" onMouseOut="Revert()">Gallery</a></li>
            <li><a href="/studies/index" id="4" onMouseOver="MouseOver(id)" onMouseOut="Revert()">Studies</a></li>
            <li><a href="/contact/index" id="5" onMouseOver="MouseOver(id)" onMouseOut="Revert()">Contact</a></li>
            <li><a href="/test/index" id="6" onMouseOver="MouseOver(id)" onMouseOut="Revert()">Test</a></li>
            <li><a href="/history/index" id="7">Browsing history</a></li>
		</ul>
		<span id="time"><script>ShowDate();</script></span>
	</nav></header>
	<div class="block">
		<h2>Тест - Основы программирования и алгоритмические языки</h2>
		<form method="post" action="validate" name="toTest">
			<fieldset class="form">
				<legend>Контактная информация</legend>
					<p><label>ФИО </label><input type="text" name="fio" size="40"></p>
					<p><label>Группа</label>
					<select name="Groups">
						<optgroup label="1 курс">
							<option value="11">ИС-11
							<option value="12">ИС-12
							<option value="13">ИС-13
						</optgroup>
							<optgroup label="2 курс">
							<option value="21">ИС-21
							<option value="22">ИС-22
							<option value="23">ИС-23
						</optgroup>
						<optgroup label="3 курс">
							<option value="31">ИС-31
							<option value="32">ИС-32
							<option value="33">ИС-33
						</optgroup>
						<optgroup label="4 курс">
							<option value="41">ИС-41
							<option value="42">ИС-42
							<option value="43">ИС-43
						</optgroup>
					</select>
				</p>
			</fieldset>
			<p>1. Phython это?</p>
			<p><input type="checkbox" name="option1" value="language">Язык программирования<Br>
			<p><input type="checkbox" name="option2" value="animal">Животное класса пресмыкающиеся<Br>
			<p>2.Язык программирования - это:</p>
			<p>а) способ общения пользователя с компьютерной системой</p>
			<p>б) совокупность символов, предназначенных для передачи данных</p>
			<p>в) естественный язык, предназначенный для общения людей и компьютеров</p> 
			<p>г) формализованные языки, предназначенные для описания алгоритмов на языке исполнителя-компьютера</p> 
			<p>д) алгоритм, записанный в машинных кодах</p>
			<p>е) способ общения программистов между собой</p>
			<p>Ответ: 
				<select Name="Groups2">
						<optgroup label="вариант 1:">
							<option value="1">способ общения пользователя с компьютерной системой
						</optgroup>
						<optgroup label="вариант 2">
							<option value="2">совокупность символов, предназначенных для передачи данных
						</optgroup>
						<optgroup label="вариант 3">
							<option value="3">естественный язык, предназначенный для общения людей и компьютеров
						</optgroup>
						<optgroup label="вариант 4">
							<option value="4">формализованные языки, предназначенные для описания алгоритмов на языке исполнителя-компьютера
						</optgroup>
						<optgroup label="вариант 5">
							<option value="5">алгоритм, записанный в машинных кодах
						</optgroup>
						<optgroup label="вариант 6">
							<option value="6">способ общения программистов между собой
						</optgroup>
					</select>
			<p><label>3. Что такое класс</label></p>
			<p><input type="text" name="question3" size="100"></p>
			<p><input type="submit" value="Отправить">
			<input type="reset" value="Очистить форму"></p>
		</form>
	</div>