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

    Interests.addEventListener('click',click1Submenu(),true);
}
/*function SubMenuOut(){
    document.getElementById('sub').addEventListener('click',c(),true)
}*/

function click1Submenu(){
    var s=$('#sub');
    s[0].style.visibility='visible';
    s.removeEventListener('click',click1Submenu(),true)
    s.addEventListener('click',click2Submenu(),true)
}

function click2Submenu(){
    var s=$('#sub');
    s[0].style.visibility='hidden';
    s.addEventListener('click',click2Submenu(),true)
    s.addEventListener('click',Submenu(),true)
}
