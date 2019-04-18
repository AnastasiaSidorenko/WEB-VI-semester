window.onload = function(){
    console.log("here");
    var input_login = $('input[id=login]');
    input_login.blur(function(){
        console.log("here blur");
        var params = 'login=' + input_login.val();
        postAjax("checkLogin",params);
    })
};

function postAjax(url,params){
    var request = new XMLHttpRequest();

    request.onreadystatechange=function(){
            if(request.readyState==4 && request.status == 200){
                console.log(request.responseText);
                if(request.responseText == '0'){
                    $('.caption_result').html('Логин не занят');
                }
                if(request.responseText == '-1'){
                    $('.caption_result').html('Логин занят');
                }
                console.log(params);
                console.log("just response");
            }
        };

    request.open('POST', url);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    request.send(params);
}