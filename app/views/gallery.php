<header><nav>
	        <ul class="menu" id="menu" value="3">
	    	<li><a href="/home/index" id= "0" onMouseOver="MouseOver(id)" onMouseOut="Revert()">Home page</a></li>
        	</ul>
	        <span id="time"><script>ShowDate();</script></span>
        </nav></header>
    </main>
    <div>
        <?php
        $model->show_gallery();
        ?>
    </div>