function checkIfNotFree(){
    var request = new XMLHttpRequest();

    request.onreadystatechange = processReq();

    request.open('POST','/php/LoginValidationInDB.php');
    request.send();
    $('#login div').append(caption);
}

function processReq(){
    try{
        var caption = $("<span></span>");
        if(request.readyState==4 && request.status == 200){
            if(request.responseText=='1' ){
                caption.innerHtml = "Получили 1"
            }
        }
        else{
            caption.innerHtml = "Нельзя проверить логин(проверка- он пуст)";
        }
    }
    catch(error) {
        console.error(error);
    }
}