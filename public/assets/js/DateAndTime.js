Days=new Array("Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота");
function ShowDate(){
	var dateObj=new Date();
	var day_of_the_week;
    var day=dateObj.getDay();
    var today_day=dateObj.getDate();
    var today_month=dateObj.getMonth();
    today_month++;
	day_of_the_week=Days[day];
	Year=dateObj.getFullYear()-2000;
	hour=dateObj.getHours();
	minutes=dateObj.getMinutes();
	if(minutes<10) {
		minutes="0"+minutes;
    }
    if(hour<10){
    	hour="0"+hour;
	}
	if(today_day<10){
		today_day="0"+today_day;
	}
	if(today_month<10){
		today_month="0"+today_month;
	}
    document.getElementById("time").textContent=today_day+"."+today_month+"."+Year+" "+day_of_the_week+" "+hour+":"+minutes;
	setTimeout("ShowDate()",1000);
}