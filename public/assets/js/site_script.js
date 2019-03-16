titles=new Array("Цветы на стене Воронцовского дворца","Чёрное море","Трава в октябре","Я в Ялте","Воронцовский дворец(Алупка)","Пустыня Негев(Израиль)",
"на Набережной Севастополя","Памятник затопленным кораблям","на Херсонесе","Фиолент","Я возле роз","Роза","У аэропорта в Симферополе","Цветущая вишня",
"Петунии в Ноябрьске");
photos=new Array("01.png","02.png","03.png","11.png","12.png","13.png","21.png","22.png","23.png","31.png","32.png","33.png","41.png","42.png","43.png");

function CreateTableAlbum(){
	var q=0;
	
	document.write('<div class="photoalbum"><table>');
	for(var i=0;i<5;i++){
		document.write('<TR class="photoalbum">');
		for(var j=0; j<3 ;j++,q++){
			document.write('<TD><img src="photoalbum/'+photos[q] + '" alt="Фото '+(q+1)+'" title="'+titles[q]+'"></TD>');
		}
		document.write('<TR class="photoalbum">');
		for(var j=0; j<3; j++){
			document.write('<TD>'+titles[q]+'</TD>');
		}
	}
	document.write('</table></div>');
}

function interests(){
	for(var i=0; i<interests.arguments.length; i++){
		document.write('<li>'+interests.arguments[i]+'</li>');
	}
}
