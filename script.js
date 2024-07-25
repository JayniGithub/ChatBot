$(document).ready(function(){
    $("#send-btn").on("click", function(){
        $value = $("#data").val();
        $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
        $(".form").append($msg);
        $("#data").val("");

        // starting ajax coding
        $.ajax({
            url: 'message.php',
            type: 'POST',
            data: 'text='+$value,
            success: function(result){
                $response = '<div class="bot-inbox inbox"><div class="icon"><img src="./img/chatbot old.jpg" style="width:45px;"/></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                $(".form").append($response);
            }
        });
    });
});