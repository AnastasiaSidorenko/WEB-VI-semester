function GenerateEditDiv(entry_id){
    edit_div = $('<div class="edit_div" id="edit_div'+entry_id+'"></div>');
    $('div[id=blog_entry_' + entry_id + ']')
        .append(edit_div);
    $(edit_div) .append('<FORM id="formFrame'+entry_id+'" name="formFrame" method="post" target="myIFrame" enctype="multipart/form-data"'
        +'<p><label>Тема сообщения </label><input type="text" size="80" ' +
        'name="blog_entry_title" id="blog_entry_title"'+entry_id+'/></p>'+
        '<p><label>Текст записи </label></p>'+'<textarea name="blog_entry_text" id="blog_entry_text'
        + entry_id + '" rows=10 cols=80></textarea>' + '<span name="entry_id" style="display:none">'+entry_id +'</span>'
        + '</FORM><input type="button" name="send" value="Сохранить изменения" onclick="send(\'+ entry_id +\')"/>');
    //onclick="send('+ entry_id +')"
    $('button[id=' + entry_id + ']').prop('disabled','true');
}

function send(id){
    var myform = $('#formFrame'+id);
    console.log(myform);

    iframe = document.createElement('iframe');
    iframe.name = myform.target = Date.parse(new Date);
    iframe.src="/admin/blog/edit_entry";
    iframe.style.display = 'none';
    //iframe.location.src.replace('/edit_entry');
    iframe.onload = iframe.readystatechange = function(){

        console.log('ok');
    };
    $('body').append(iframe);
    console.log("here");
    myform.attr("action",'/admin/blog/edit_entry');
    myform.submit();
    iframe.contentWindow.onload = function() {
        console.log( "contentWindow onload" );
    };
}


