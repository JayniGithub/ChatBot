$(document).ready(function(){
    $('#send-btn').prop('disabled', true);
    $('#data').keyup(function() {
        if($(this).val().length != 0) {
            $('#send-btn').prop('disabled', false);
        }
    });
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
            beforeSend: function() {
                $loading = '<div class="bot-inbox inbox" id="loading"><div class="icon"><img src="./img/chatbot old.jpg" style="width:45px;"/></div><div class="loading-anim-div"><div class="dot"></div><div class="dot"></div><div class="dot"></div></div></div>';
                $(".form").append($loading);
            },            
            complete:  function(){
                $('#loading').remove();
            },
            success: function(result){
                $response = '<div class="bot-inbox inbox"><div class="icon"><img src="./img/chatbot old.jpg" style="width:45px;"/></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                $(".form").append($response);
                $('#send-btn').prop('disabled', true);
            }
        });
    });
});