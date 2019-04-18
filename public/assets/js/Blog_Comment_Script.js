function GenerateCommentDiv(entry_id){
    $('div[id=' + entry_id + ']')
        .append('<div class="comment_div"></div>')
        .append('<p>Ваш комментарий:</p>'+'<textarea name="blog_comment_text" id="'+ entry_id + '" rows=5 cols=50" />'
        + '<input type="submit" id="submit" value="Отправить" onclick="attachScript()">');

    $('button[id=' + entry_id + ']').prop('disabled','true');
}

function attachScript(id,src){
    var text = $('textarea[id=' + entry_id + ']');
    $(head).append('<script type="text/javascript" src="/public/assets/send_comment_ajax.php"?text=' + text);
}