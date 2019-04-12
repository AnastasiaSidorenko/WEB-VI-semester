function CreateSubMenu(){
    var $Interests = $('#2');
    var	$ul = $('<ul>',{
        id:"sub",
        class:"submenu"
    }).appendTo($Interests);
    $ul.hide();
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
}


function SubMenu(id){
    document.getElementById(id).addEventListener('click',function(event){event.preventDefault();click1Submenu()},true);
}
function SubMenuOut(){
    document.getElementById('sub').addEventListener('click',c(),true)
}

function click1Submenu(){
    var s=document.getElementsByClassName('submenu');
    s[0].style.visibility='visible';
    document.getElementById('sub').removeEventListener('click',function(event){event.preventDefault();click1Submenu()},true)
    document.getElementById('sub').addEventListener('click',function(event){event.preventDefault();click2Submenu()},true)

}
function click2Submenu(){
    var s=document.getElementsByClassName('submenu');
    s[0].style.visibility='hidden';
    document.getElementById(id).addEventListener('click',function(event){event.preventDefault();click1Submenu()},true)
}
