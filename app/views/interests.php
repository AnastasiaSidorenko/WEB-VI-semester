	<header><nav>
	<ul class="menu" id="menu" value="2">
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
	<div>
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
            $model->Interests_Output($model->hobbies);
            ?>
		</ul>
		<p id="books">Любимые книги</p>
		<ul class="interests ul">
            <?php
            $model->Interests_Output($model->books);
            ?>
		</ul>
		<p id="music">Любимая музыка</p>
		<ul class="interests ul">
            <?php
            $model->Interests_Output($model->music);
            ?>
		</ul>
	</div>