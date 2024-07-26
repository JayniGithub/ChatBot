<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>     -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
    <title>My ChatBot</title>
</head>
<body>

    <div class="wrapper">
        <div class="title">
            Simple ChatBot
        </div>

        <div class="form"></div>
        
        <div class="typing-area">
            <div class="input-field">
                <input type="text" id="data" required placeholder="Type Message...">
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>
    
</body>
</html>