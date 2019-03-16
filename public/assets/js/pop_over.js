var help=["ФИО - 3 слова с одиночными пробелами между ними",
"",
"",
"",
"example@gmail.com",
"Номер телефон в корректном формате (+7 или +3 и остальные 8-10 цифр номера телефона)",
]
var css_top=["150px","","","","290px","340px",];
var css_height=["50px","","","","40px","80px",];
var css_left=["680px","","","","470px","470px"]
var $div1 = $('<div>',{
	class: "overlay_pop_over"
}).appendTo('body');
var $div2 = $('<div>',{
	class: "popup_pop_over"
}).appendTo($div1);
var $p1=$('<span>',{
}).appendTo($div2);

var $contact_p=$('.form1').find('>p'),
	$contact_labels=$contact_p.find('>label'),
	Index;
function replaceText(i){
	$p1.html(help[i]);
	$('.popup_pop_over').css({
		top:css_top[i],
		height:css_height[i],
		left:css_left[i]
	});//заменяем
}

$contact_labels.mouseenter(function() {
	Index=$(this).parent().index();
	if(Index!=2 && Index!=3 && Index!=4){
		replaceText(Index-1);
		$div1.show();
	}
}).mouseleave(function() {
	$div1.delay(2000).hide(0);
});


