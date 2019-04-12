function CreateTableCurrentHistory(){
	var pages = Array('home', 'about', 'interests', 'gallery', 'studies', 'contact', 'test');
	for (var i = 0; i < pages.length; i++) {
		var iValue = localStorage[pages[i]] || 0;
		localStorage.setItem(pages[i], iValue);
	}
	
	body = document.body;
	div_current_session = document.createElement('div');
	div_current_session.className="history";
	div = document.createElement('div');
	body.appendChild(div_current_session);
	body.appendChild(div);
	div.id='local_storage';
	
	var table = document.createElement('table');
	div.appendChild(table);
	
	var p_current_session=document.createElement('p');
	var text_current_session=document.createTextNode('История текущего сеанса');
	div_current_session.appendChild(p_current_session);
	p_current_session.appendChild(text_current_session);
	
	var row1 = table.insertRow();
	row1.className="studies";
	row1.id='row1';	
	var row2 = table.insertRow();
	row2.id='row2';	
	
	// первая строка
	for(var i = 0; i < pages.length; i++){
		var cell = row1.insertCell();
		cell.innerHTML=pages[i];
	}
	//вторая строка
	for(var i = 0; i < pages.length; i++){
		var cell = row2.insertCell();
		cell.innerHTML=localStorage.getItem(pages[i]);
	}
}

function LocalStorage(id){
	local=window.localStorage;
	count=local.getItem(id);
	local.setItem(id, ++count);
}

function CreateTableAllTimeHistory(){
	var pages = Array('home', 'about', 'interests', 'gallery', 'studies', 'contact','test');
	body = document.body;
	div_all_time = document.createElement('div');
	div_all_time.className="history";
	div = document.createElement('div');
	body.appendChild(div_all_time);
	body.appendChild(div);
	div.id='cookies';
	
	/*for (var i = 0; i < pages.length; i++) {
		var iValue = getCookie[pages[i]] || 0;
		setCookie(pages[i], iValue);
	}*/
	var table = document.createElement('table');
	div.appendChild(table);
	
	var p_all_time=document.createElement('p');
	var text_all_time=document.createTextNode('История за все время');
	div_all_time.appendChild(p_all_time);
	p_all_time.appendChild(text_all_time);
	
	var row1 = table.insertRow();
	row1.className="studies";
	row1.id='row1';	
	var row2 = table.insertRow();
	row2.id='row2';	
	
	// первая строка
	for(var i = 0; i < pages.length; i++){
		var cell = row1.insertCell();
		cell.innerHTML=pages[i];
	}
	//вторая строка
	for(var i = 0; i < pages.length; i++){
		var cell = row2.insertCell();
		cell.innerHTML=getCookie(pages[i]);
	}
}

function getCookie(name) {
    var matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}

function setCookie(name) {
    var newValue;
    var currentValue = parseInt(getCookie(name));
    if (isNaN(currentValue)) {
        currentValue=0;
    }
    newValue = currentValue + 1;
    //document.cookie = name + "=" +newValue + expires + "; path=/";
    document.cookie = name + "=" +newValue + "; path=/";
}

