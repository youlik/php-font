<?php
header("Access-Control-Allow-Credentials:true");
header('Content-type:text/json');
header('Access-Control-Allow-Origin:http://10.30.29.65:63341');
session_start();
$message=array('message'=>'success');
if(!isset($_SESSION['name']))
{
    $message['message']='errors';
    echo json_encode($message);
}
else{
    echo json_encode($message);
}
?>

