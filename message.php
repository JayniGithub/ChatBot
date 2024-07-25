<?php 

    require "vendor/autoload.php";

    use GeminiAPI\Client;
    use GeminiAPI\Resources\Parts\TextPart;

    $text = "";
    if(isset($_POST['text'])) {
        $text = $_POST['text'];
    }

    $client = new Client('YOUR API KEY');

    $response = $client->geminiPro()->generateContent(
        new TextPart($text),
    );

    echo $response->text();


    // database connect
    // $con = mysqli_connect("localhost","root","","chatbot") or die("Connection Unsuccessful");
    
    // $text = "";
    // if(isset($_POST['text'])){
    //     $text = $_POST['text'];
    // }
   
    // $message = mysqli_real_escape_string($con, $text);

    // $check_data = "SELECT replies FROM bot WHERE queries LIKE '%$message%' ";
    // $query_run = mysqli_query($con, $check_data) or die("Error");

    // if(mysqli_num_rows($query_run) > 0){
    //     $fetch_data = mysqli_fetch_assoc($query_run);
    //     $replay = $fetch_data['replies'];
    //     echo $replay;
    // }
    // else{
    //     echo "Sorry! I can't be able to Understand";
    // }
?>