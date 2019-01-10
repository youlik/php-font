<?php
header("Access-Control-Allow-Credentials:true");
header('Content-type:text/json');
//header('Access-Control-Allow-Origin:http://10.30.29.65:63341');
$allow_origin=array(
    'http://10.30.29.65:63341',
    'http://10.30.29.66:63341'
);
$origin=isset($_SERVER['HTTP_ORIGIN'])?$_SERVER['HTTP_ORIGIN']:'';
if(in_array($origin, $allow_origin)){
    header('Access-Control-Allow-Origin:'.$origin);
}
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

