// function MouseOver(id){
// 	var page_id=document.getElementById("menu").getAttribute("value");
// 	if(id!=page_id){
// 		document.getElementById(id).addEventListener("mouseover",ChangeColor(),true);
// 		};
// };
// function ChangeColor(){document.body.style.background='#A864AD';}
// function Revert(){document.body.style.background='#B492BD';}

function SubMenu(){
    var $Interests = $('#int_item');
    var	$ul = $('<ul>',{
        id:"sub",
        class:"submenu"
    }).appendTo($Interests);
    $p1 = $('<li>',{
    }).appendTo($ul);
    $p2 = $('<li>',{
    }).appendTo($ul);
    $p3 = $('<li>',{
    }).appendTo($ul);
    $a1 = $('<a>',{
        href:"/interests/index#hobbies",
        text:"Увлечения"
    }).appendTo($p1);
    $a2 = $('<a>',{
        href:"/interests/index#books",
        text:"Книги"
    }).appendTo($p2);
    $a3 = $('<a>',{
        href:"/interests/index#music",
        text:"Музыка"
    }).appendTo($p3);
    $('#sub')[0].style.visibility="hidden";
}

function Toggle() {
    var x = $('#sub')[0];
    if (x.style.visibility === "hidden") {
        x.style.visibility = "visible";
    } else {
        x.style.visibility = "hidden";
    }
    return true;
}

