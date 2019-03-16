function Check_FIO(){
	var fio_elem=document.getElementById('fio');
	var fio = fio_elem.value;
	
	if((fio.length==0)){ 
		OutCaption(fio_elem,'fio_caption',"Поле не может быть незаполненным");
		return false;
	}
	if(fio.length!=0){
		Reg_FIO=/^[A-zA-Я]{1,}[\ ][A-zA-Я]{1,}[\ ][A-zA-Я]{1,}$/i;
		if(!(Reg_FIO.test(fio))){
			OutCaption(fio_elem,'fio_caption',"Поле должно содержать фамилию, имя и отчество, разделённые пробелами");
			return false;
		}
		RemoveCaption(fio_elem,'fio_caption');
		$("#fio").css("border", "2px solid green"); 
		return true;
	}
}

function OutCaption(elem,id_caption,text){
	if(document.getElementById(id_caption)!== null){
		capt=document.getElementById(id_caption);
		capt.textContent=text;
	}
	else{
		var caption=document.createElement('span');
		var caption_text=document.createTextNode(text);
		caption.appendChild(caption_text);
		caption.id=id_caption;
		elem.parentNode.appendChild(caption);
	}
	elem.style.border = "2px solid red";
}

function RemoveCaption(elem,id_caption){
	if(document.getElementById(id_caption)!=null){
		caption = document.getElementById(id_caption);
		elem.parentNode.removeChild(caption);
	}
}

function Check_Date(input_date){
	var date=document.getElementById('date')
	var input=input_date.value;
	if(input.length==0){
		OutCaption(date,'date_caption',"Поле не может быть незаполненным");
		return false;
	}
	RemoveCaption(date,'date_caption');
	$("#date").css("border", "2px solid green"); 
	return true;
}

function Check_Phone(input_date){
	var phone=document.getElementById('phone');
	var input=input_date.value;
	if(input.length!=0){
		Reg_PHONE=/^[+][37][0-9]{8,10}$/;
		if(!(Reg_PHONE.test(input))){
			OutCaption(phone,'phone_caption',"Введите номер телефона в верном формате (+3 или +7 и остальные 8-10 цифр номера телефона)");
			return false;
		}
		else{
			RemoveCaption(phone,'phone_caption');
			$("#phone").css("border", "2px solid green"); 
			return true;
		}
	}	
	else{
		OutCaption(phone,'phone_caption',"Поле не может быть незаполненным");
		return false;
	}
}

function Check_Email(input_date){
	var email=document.getElementById('email');
	var input=input_date.value;
	if(input.length==0){
		OutCaption(email,'email_caption',"Поле не может быть незаполненным");
		return false;
	}
	else{
		MyReg_Mail=/^[A-z0-9]{1,}[@][A-z]{1,}.[A-z]{1,}$/;
		if(!MyReg_Mail.test(input)){
			OutCaption(email,'email_caption',"Введите email в верном формате");
			return false;
		}
	}
	RemoveCaption(email,'email_caption');
	$("#email").css("border", "2px solid green"); 
	return true;
}

function Check_Message(input_date){
	var message=document.getElementById('message');
	var input=input_date.value;
	if(input.length==0){
		OutCaption(message,'message_caption',"Поле сообщения не должно быть пустым");
		return false;
	}
	RemoveCaption(message,'message_caption');
	$("#message").css("border", "2px solid green"); 
	return true;
}

function Check_All()
{
    var fio = document.getElementById('fio');
    var date = document.getElementById('date');
    var phone = document.getElementById('phone');
    var email = document.getElementById('email');
	var message = document.getElementById('message');
	var submit = document.getElementById('submit');
    fio.style.border == "2px solid green"
	&& date.style.border == "2px solid green"
	&& phone.style.border == "2px solid green" 
	&& email.style.border == "2px solid green"
	&& message.style.border == "2px solid green"
	&& (Check_GenderAndAge()==true)
	? submit.disabled = false : submit.disabled = true;
}

function Check_GenderAndAge(){
	var genderM=document.forms.ToContact.sex[0].checked;
	var genderF=document.forms.ToContact.sex[1].checked;
	var bool_age;
	if(document.forms.ToContact.age[0].selected==true)
		bool_age=false;
	if((genderM==false && genderF==false || bool_age==false)){
		return false;
	}
	return true;
}

function validate_test(){
	var question3 = document.forms.ToTest.question3.value;
	Reg_FLOAT=/^[-]?[0-9]{1,}[.,][0-9]{1,}$/;
	if(!(Reg_FLOAT.test(question3))){
		alert("Error. Неверное формат ответа на вопрос №3");
		document.forms.ToTest.question3.focus();
		return false;
	}
	return true;
}

function Clear(){
	var fio=document.getElementById('fio');
	var date=document.getElementById('date');
	var phone=document.getElementById('phone');
	var email=document.getElementById('email');
	var message=document.getElementById('message');
	RemoveCaption(fio,'fio_caption');
	RemoveCaption(date,'date_caption');
	RemoveCaption(phone,'phone_caption');
	RemoveCaption(email,'email_caption');
	$("input,textarea").css("border","1px solid grey");
}

