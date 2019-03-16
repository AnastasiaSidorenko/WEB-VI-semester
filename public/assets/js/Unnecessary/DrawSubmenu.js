function CreateSubMenu(){
    var $Interests = $('#2');
    var	$ul = $('<ul>',{
        id:"sub",
        class:"submenu"
    }).appendTo($Interests);
    var	$p1 = $('<li>',{
    }).appendTo($ul);
    $p2 = $('<li>',{
    }).appendTo($ul);
    $p3 = $('<li>',{
    }).appendTo($ul);
    $a1 = $('<a>',{
        href:"/user/interests#hobbies",
        text:"Увлечения"
    }).appendTo($p1);
    $a2 = $('<a>',{
        href:"/user/interests#books",
        text:"Книги"
    }).appendTo($p2);
    $a3 = $('<a>',{
        href:"/user/interests#music",
        text:"Музыка"
    }).appendTo($p3);
    //Interests.addEventListener('click',click1Submenu(),true);
}

function Toggle() {
    var x = $('#sub');
    if (x.style.visibility === "hidden") {
        x.style.visibility = "visible";
    } else {
        x.style.display = "hidden";
    }
}

/*function click1Submenu(){
    var s=$('#sub');
    s[0].style.visibility='visible';
   // s.removeEventListener('click',click1Submenu(),true)
   // s.addEventListener('click',click2Submenu(),true)
}

function click2Submenu(){
    var s=$('#sub');
    s[0].style.visibility='hidden';
   // s.addEventListener('click',click2Submenu(),true)
   // s.addEventListener('click',Submenu(),true)
}*/

/*function CreateSubmenu(){
	document.getElementById('2').removeEventListener('click', function(event){event.preventDefault();CreateSubmenu();});
	DrawSubmenu();
	document.getElementById('sub').addEventListener('click',function(event){event.preventDefault=false;});
	document.getElementById('2').addEventListener('click',function()
	{
		document.getElementById('sub').remove();
		document.getElementById('2').addEventListener('click', function(event){event.preventDefault();ClickSubmenu();});
	});

}*/

/*function DrawSubmenu(){
	var Interests = document.getElementById("2");

	var ul = document.createElement("UL");
	ul.id="sub";
	ul.setAttribute("class","submenu");

	var p1 = document.createElement("LI");
	var p2 = p1.cloneNode();
	var p3 = p1.cloneNode();

	var a1 = document.createElement("A");
	var a2 = a1.cloneNode();
	var a3 = a1.cloneNode();

	a1.href="/user/interests#hobbies";
	a2.href="/user/interests#books";
	a3.href="/user/interests#music";

	var text1 = document.createTextNode("Увлечения");
	var text2 = document.createTextNode("Книги");
	var text3 = document.createTextNode("Музыка");

	Interests.appendChild(ul);
	ul.appendChild(p1);
	ul.appendChild(p2);
	ul.appendChild(p3);
	p1.appendChild(a1);
	p2.appendChild(a2);
	p3.appendChild(a3);
	a1.appendChild(text1);
	a2.appendChild(text2);
	a3.appendChild(text3);
}*/