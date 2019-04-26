function GenerateEditDiv(entry_id){
    edit_div = $('<div class="edit_div" id="edit_div'+entry_id+'"></div>');
    $('div[id=blog_entry_' + entry_id + ']')
        .append(edit_div);
    $(edit_div) .append('<FORM id="formFrame'+entry_id+'" name="formFrame" method="get" target="myIFrame" enctype="multipart/form-data"'
        +'<p><label>Тема сообщения </label><input type="text" size="80" ' +
        'name="blog_entry_title" id="blog_entry_title'+entry_id+'"></p>'+
        '<p><label>Текст записи </label></p>'+'<textarea name="blog_entry_text" id="blog_entry_text'
        + entry_id + '" rows=10 cols=80></textarea>' + '</p>'
        + '</FORM><input type="submit" name="send" onclick="send(' + entry_id + ')" value="Сохранить изменения">');
    console.log(entry_id);
    //onclick="send('+ entry_id +')"
    $('button[id=' + entry_id + ']').prop('disabled','true');
}

function send(id) {
    var myform = $('#formFrame' + id);
    console.log(myform);
    var input_title = $('#blog_entry_title' + id).val();
    var input_text = $('#blog_entry_text' + id).val();
    // title_length=input_title.length();
    // text_length=input_text.length();
    if (input_title.length != 0 || input_text.length != 0) {
        iframe = document.createElement('iframe');
        iframe.name = myform.target = Date.parse(new Date);
        iframe.id = 'frame';
        iframe.style.display = 'none';
        //iframe.location.src.replace('/edit_entry');
        iframe.onload = iframe.readystatechange = function () {
            console.log('ok');
        };
        $('body').append(iframe);
        console.log("here");
        $html_string = '<p id="title">' + input_title + '</p>' + '<p id="text">' + input_text + '</p>' + '<p id="id">' + id + '</p>';
        if (input_title.length != 0) {
            $('#blog_title_' + id).text(input_title);
        }
        if (input_text.length != 0) {
            $('#blog_text_' + id).text(input_text);
        }
        // iframe.src="/admin/blog/edit_entry";
        //$('#frame').attr("src",'/admin/blog/edit_entry');
        $('#frame').attr('src', "edit_entry?modifs=" + $html_string);
    }
}



