<?php
//header("Access-Control-Allow-Credentials:true");
//header('Content-type:text/json');
//header('Access-Control-Allow-Headers:Content-Type');
////header('Access-Control-Allow-Origin:http://10.30.29.65:63341');
//$allow_origin=array(
//    'http://10.30.29.65:63341',
//    'http://10.30.29.66:63341'
//);
//$origin=isset($_SERVER['HTTP_ORIGIN'])?$_SERVER['HTTP_ORIGIN']:'';
require "header.php";
//if(in_array($origin, $allow_origin)){
//    header('Access-Control-Allow-Origin:'.$origin);
//}
$data=file_get_contents("php://input");
$data=json_decode($data);
session_start();
$message=array('message'=>'success');

if(($data->userName==123)&&($data->passWord==123))
{

    $_SESSION['name']=$data->userName;
    $_SESSION['password']=$data->passWord;
     echo json_encode($message);
}
else
{
    $message['message']='error';
   echo json_encode($message);
}
?>