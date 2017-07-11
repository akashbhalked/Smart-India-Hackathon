$(document).ready(function(){
    
//   if( $.trim($("#conversation_id").val())){
//        var curr_id=$.trim($("#conversation_id").val());
//        $('ul.friends li').removeClass('current');
//		$('#rec'+curr_id).addClass('current');
//      }
    
//    $('ul.friends li').click(function(){
//		
//
//		$('ul.friends li').removeClass('current');
//		
//
//		$(this).addClass('current');
//		
//	})
    $.urlParam = function(name){
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results==null){
       return null;
    }
    else{
       return results[1] || 0;
     }
    }
    var curr_id=$.urlParam('id');
    if(curr_id)
        {
           $('ul.friends li').removeClass('current');
            $('#rec'+curr_id).addClass('current');  
        }
    $("#reply").on("click", function(){
        var message = $.trim($("#message").val()),
            conversation_id = $.trim($("#conversation_id").val()),
            user_form = $.trim($("#user_form").val()),
            user_to = $.trim($("#user_to").val()),
            error = $("#error");
 
        if((message != "") && (conversation_id != "") && (user_form != "") && (user_to != "")){
            error.text("Sending...");
            $.post("post_message_ajax.php",{message:message,conversation_id:conversation_id,user_form:user_form,user_to:user_to}, function(data){
                error.text(data);
                $("#message").val("");
            });
        }
    });
    
    c_id = $("#conversation_id").val();
    setInterval(function(){
        $(".display-message").load("get_message_ajax.php?c_id="+c_id);
    }, 2000);
 
    $(".display-message").scrollTop($(".display-message")[0].scrollHeight);
    
});