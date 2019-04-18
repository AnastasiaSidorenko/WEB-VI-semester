 <main class="registration">
     <script src="/public/assets/js/CheckLoginAJAX.js"></script>
		<form name="registration" method="post" action="validate" enctype="application/x-www-form-urlencoded">
				<legend>Регистрация пользователя<legend>
                        <div class="login_div"><p><label>login </label>
                            <input type="text" size="32" name="login" id="login" onclick="this.select()">
                                <span class="caption_result"></span>
                            </div>
                <p><label>ФИО </label><input type="text" size="32" name="fio" id="fio">
                <p><label>email </label><input type="email" size="31" name="email" id="email">
                <p><label>password </label><input type="text" size="27" name="password" id="password">
			<p>
			<input type="submit" id="submit" value="Отправить">
                <input type="reset" value="Очистить форму">
			</p>
		</form>
     <script src="/public/assets/js/CheckLoginAJAX.js"></script>
	</main>