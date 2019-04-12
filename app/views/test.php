	<div class="block">
		<h2>Тест - Основы программирования и алгоритмические языки</h2>
		<form method="post" action="validate" name="toTest">
			<fieldset class="form">
				<legend>Контактная информация</legend>
					<p><label>ФИО </label><input type="text" name="fio" size="40"></p>
					<p><label>Группа</label>
					<select name="Groups">
						<optgroup label="1 курс">
							<option value="ИС-11">ИС-11
							<option value="ИС-12">ИС-12
							<option value="ИС-13">ИС-13
						</optgroup>
							<optgroup label="2 курс">
							<option value="ИС-21">ИС-21
							<option value="ИС-22">ИС-22
							<option value="ИС-23">ИС-23
						</optgroup>
						<optgroup label="3 курс">
							<option value="ИС-31">ИС-31
							<option value="ИС-32">ИС-32
							<option value="ИС-33">ИС-33
						</optgroup>
						<optgroup label="4 курс">
							<option value="ИС-41">ИС-41
							<option value="ИС-42">ИС-42
							<option value="ИС-43">ИС-43
						</optgroup>
					</select>
				</p>
			</fieldset>
			<p>1. Python это?</p>
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
			<p><label>3. Класс это образ сущности, имеющий ... и методы</label></p>
			<p><input type="text" name="question3" size="100"></p>
			<p><input type="submit" value="Отправить">
			<input type="reset" value="Очистить форму"></p>
		</form>
	</div>
    <?php
    if(isset($_SESSION['FIO'])){
    $res = TestModel::findAll();
        echo "<div class='studies'>";
            echo "<table>";
                echo "<TR>";
                    echo "<TD>";
                        echo "Дата";
                    echo "</TD>";
                    echo "<TD>ФИО</TD>";
                    echo "<TD>Группа</TD>";
                    echo "<TD>Вопрос 1</TD>";
                    echo "<TD>Вопрос 2</TD>";
                    echo "<TD>Вопрос 3</TD>";
                echo "</TR>";
            foreach($res as $value){
                echo "<TR>";
                    echo "<TD>$value->date</TD>";
                    echo "<TD>$value->fio</TD>";
                    echo "<TD>$value->group</TD>";
                    echo "<TD>$value->question1</TD>";
                    echo "<TD>$value->question2</TD>";
                    echo "<TD>$value->question3</TD>";
                echo "</TR>";
            }
            echo "</table>";
        echo "</div>";
        }
    ?>