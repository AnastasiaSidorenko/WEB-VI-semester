var date = new Date();
var currdate = new Date();
var colorclear;
var input;

function insertNodeText(obj, text) {
	var txtNode = document.createTextNode(text);
	obj.appendChild(txtNode);
	return obj;
}

function getCoords(elem) {
	var box = elem.getBoundingClientRect();
	var scrollTop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
 	var scrollLeft = window.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft;
 	var clientTop = document.documentElement.clientTop || document.body.clientTop || 0;
 	var clientLeft = document.documentElement.clientLeft || document.body.clientLeft || 0;
	var top  = box.top +  scrollTop - clientTop;
	var left = box.left + scrollLeft - clientLeft;
	return { top: Math.round(top) + elem.offsetHeight + 'px', left: Math.round(left) + 'px'}
}

function getCountDay(index) {
	var months = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
	if (date.getFullYear() % 4 == 0)
		months[1]++;
	return months[index];
}

function getCountWeek(date) {
	date.setDate(1);
	return Math.ceil((getCountDay(date.getMonth())) / 7);
}

function getNumberDay(date) {
	var days = new Array(6, 0, 1, 2, 3, 4, 5);
	return days[date.getDay()];
}

function getNumberFirstDay(date) {
	date.setDate(1);
	return getNumberDay(date);
}

function Change_Month(){
	var select1=document.getElementById('select1');
	date.setMonth(select1.options[select1.selectedIndex].value);
}
function Change_Year(){
	var select2=document.getElementById('select2');
	date.setFullYear(select2.options[select2.selectedIndex].value);
}
function createTable() {
	body = document.body;
	div = document.createElement('div');
	body.appendChild(div);
	div.id='calendar';
	div.className = 'calendar-wrapper';
		
	var table = document.createElement('table');
	div.appendChild(table);
	var months=Array("January","February","March","April","May","June","July","August","September","October","November","December");
	var dateObj=new Date();
	var start=dateObj.getFullYear()-80;
	var end=dateObj.getFullYear()-4;
	var select1=document.createElement('select');
	var option1=[];
	select1.id='select1';
	select1.setAttribute('onChange',"document.getElementById('select1').addEventlistener('change',Change_Month(),generateCalendar(),true)");
	var text1=[];
	var select2=document.createElement('select');
	var option2=[];
	select2.id='select2';
	select2.setAttribute('onChange',"document.getElementById('select1').addEventlistener('change',Change_Year(),generateCalendar(),true)");
	var text2=[];
	for(var i=0; i<12 ; i++){
		option1[i]=document.createElement('option');
		option1[i].setAttribute('value',i);
		text1[i]=document.createTextNode(months[i]);
		select1.appendChild(option1[i]);
		option1[i].appendChild(text1[i]);
	}
	for(var i=0,k=start; k<end; k++,i++){
		option2[i]=document.createElement('option');
		option2[i].setAttribute('value',k);
		text2[i]=document.createTextNode(k);
		select2.appendChild(option2[i]);
		option2[i].appendChild(text2[i]);
	}
	table.setAttribute('align', 'center');
	table.setAttribute('cellpadding', '0');
	table.setAttribute('cellspacing', '0');	
	
	var row = table.insertRow();
	row.id='first-child';	
	
	// первая ячейка
	var cell = row.insertCell();
	cell.setAttribute('colspan', '4');
	cell.className = 'center';
	cell.appendChild(select1);
	// вторая ячейка
	cell = row.insertCell();
	cell.setAttribute('colspan', '3');	
	cell.className = 'center';
	cell.appendChild(select2);
	
	date.setDate(1);
	date.setMonth(0);
	date.setFullYear(start);
}

function generateCalendar() {
	var wrapper = document.getElementById('calendar');
	var table = wrapper.getElementsByTagName('table')[0];	
	while (table.rows.length > 1)
		table.deleteRow(table.rows.length - 1);
	
	var countday = 1;
	for (i = 0; i < getCountWeek(date); i++) {
		row = table.insertRow();
		for (j = 0; j < 7; j++) {
			cell = row.insertCell();
			if (countday <= getCountDay(date.getMonth())) {
				cell = insertNodeText(cell, countday);
				
				cell.onclick = function() {
					document.getElementById('calendar').style.display = 'none';
					date.setDate(this.lastChild.nodeValue);
					var d = (date.getDate() < 10)? '0' + date.getDate() : date.getDate();									
					var m = ((date.getMonth() + 1) < 10)? '0' + (date.getMonth() + 1) : (date.getMonth() + 1);
					// Порядок вывода даты (День, Месяц, Год)
					input.value = m + '/' + d + '/' + date.getFullYear();					
					};
				cell.onmouseover = function() {colorclear = this.className; this.className = 'Select';};
				cell.onmouseout = function() {this.className = colorclear;};
				cell.className = 'DefaultDay';
				if (currdate.getFullYear() == date.getFullYear() && currdate.getMonth() == date.getMonth() && currdate.getDate() == countday)
					cell.className = 'CurrDay';
				countday++;
			}
			else {
				cell.style.border = 'none';
				cell = insertNodeText(cell, ' ');
			}
		}
	}
}


function showcalendar(input_date) {
	input = input_date;
	var wrapper = document.getElementById('calendar');
	
	if (input.value != '') {
		// Разделяем переданную дату
		var ar = input.value.split('/');
		// Массив параметров (День, Месяц, Год)
		// В Конструктор Date передаем в другом порядке, а именно: Год, Месяц, День 
		// ar[2] - Год
		// ar[1] - Месяц
		// ar[0] - День
		// В JavaScript месяца идут с 0 до 11, поэтому мы от номера месяца отнимаем единицу
		date = new Date (ar[2], ar[1] - 1, ar[0]);
	}
	
	generateCalendar();	
		
	wrapper.style.left = getCoords(input).left ;
	wrapper.style.top = getCoords(input).top;
	wrapper.style.display = (wrapper.style.display=="block")? "none" : "block";
}

if (window.addEventListener)
	window.addEventListener('load', createTable, false);
else if (window.attachEvent)
	window.attachEvent('onload', createTable);