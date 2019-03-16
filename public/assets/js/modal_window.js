var div1=$('<div>',{
	class:"overlay js-overlay-campaign"
}).appendTo('body');
var div2=$('<div>',{
	class:"popup js-popup-campaign"
}).appendTo(div1);
var p=$('<p>',{
	text: "Вы действительно хотите это сделать?"
}).appendTo(div2);
var div3=$('<div>',{
	class:"button_yes_no"
}).appendTo(div2);
$('<input/>',{
	type:"button",
	id:"button_yes",
	value:"Да"
}).appendTo(div3);
$('<input/>',{
	type:"button",
	id:"button_no",
	value:"Нет"
}).appendTo(div3);


$('.js-button-campaign').click(function(){
	$('main').css('filter','blur(5px)');
	$('.js-overlay-campaign').fadeIn();
});

$('#button_yes').click(function(){
	$('form')[0].reset();
	Clear();
	$('.js-overlay-campaign').fadeOut();
	$('main').css('filter','none');
});
	
$('#button_no').click(function(){
	$('.js-overlay-campaign').fadeOut();
	$('main').css('filter','none');
});