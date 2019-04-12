	<div>
        <?php
        include $_SERVER['DOCUMENT_ROOT']."/public/assets/php/interests_script.php"
        ?>
		<ul class="int">
		<li><a href="#hobbies">Мои увлечения</a></li>
		<li><a href="#books">Любимые книги</a></li>
		<li><a href="#music">Любимая музыка</a></li>
		</ul>
	</div>
	<div class="interests p">
		<p id="hobbies">Мои увлечения</p>
		<ul class="interests ul">
            <?php
            Interests_Output($model->GetHobbies());
            ?>
		</ul>
		<p id="books">Любимые книги</p>
		<ul class="interests ul">
            <?php
            Interests_Output($model->GetBooks());
            ?>
		</ul>
		<p id="music">Любимая музыка</p>
		<ul class="interests ul">
            <?php
            Interests_Output($model->GetMusic());
            ?>
		</ul>
	</div>