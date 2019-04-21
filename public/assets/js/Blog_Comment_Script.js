function GenerateCommentDiv(entry_id){
    $('div[id=blog_entry_' + entry_id + ']')
        .append('<div class="comment_div" id="comment_div'+entry_id+'"></div>');
    $('div[id=comment_div' + entry_id + ']') .append('<p>Ваш комментарий:</p>'+'<textarea name="blog_comment_text" id="'+ entry_id + '" rows=5 cols=50" />'
        + '<input type="submit" id="submit" value="Отправить" onclick="attachScript('+entry_id+')">');

    $('button[id=' + entry_id + ']').prop('disabled','true');
}

function attachScript(id){
    var text = $('textarea[id=' + id + ']').val();
    var xmlString = "<comment>"+ "<text>"+ text + "</text>" +
        "<entry_id>"+ id + "</entry_id>" + "</comment>";
    console.log(xmlString);
    var url = "send_comment_ajax";
//     var script = $('<script src="\'+url+\'?xml=\' + xmlString + \'&callback=showResult"></script>');
// script.onreadystatechange=function(){
//     if(this.readyState=='compplete'||this.readyState=='loaded'){
//         this.onreadystatechange=null;
//         setTimeout()
//     }
// }
    $('body').append('<script src="'+url+'?xml=' + xmlString+'"></script>');

}

function showResult(n){
    console.log("showResult");

    console.log(n['entry_id'][0]);
    var id=n['entry_id'][0];
    $('<p style="color:blue;">'+n['err_Message']+'</p>').insertAfter($('button[id='+id+']'));

     if(n['err_Code']=='no'){
         $('div[id=comments' + id + ']').append('<div class="comment"><div class=\'comment_a_t\'><p>'
             + n['date_time'] + '<span class="comment_a">'+n['FIO']+'</span></p></div>'+
         '<div>'+n['text'][0]+'</div></div>');
         $('div[id=comment_div' + id + ']').remove();
         $('button[id=' + id + ']').removeAttr("disabled");
     }
     else{
         console.log('error');
    }
}