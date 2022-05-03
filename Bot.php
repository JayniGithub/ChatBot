<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
    <title>My ChatBot</title>
</head>
<body>

    <div class="wrapper">
        <div class="title">
            Simple ChatBot
        </div>

        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user-alt"></i>
                </div>
                <div class="msg-header">
                    <p>Hi.... My name is Erica. Come, Let's chat.</p>
                </div>
            </div>            
        </div>
        
        <div class="typing-area">
            <div class="input-field">
                <input type="text" id="data" placeholder="Type Message...">
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>

    <!--<script>
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
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user-alt"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                    }
                });
            });
        });
    </script>-->
    
</body>
</html>