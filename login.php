<?php
header("Access-Control-Allow-Credentials:true");
header('Content-type:text/json');
header('Access-Control-Allow-Headers:Content-Type');
header('Access-Control-Allow-Origin:http://10.30.29.65:63341');
$data=file_get_contents("php://input");
$data=json_decode($data);
session_start();
$message=array('message'=>'success');

if(($data->userName==123)&&($data->passWord==123))
{
    echo json_encode($message);
    $_SESSION['name']=$data->userName;
    $_SESSION['password']=$data->passWord;
}
else
{
    $message['message']='error';
   echo json_encode($message);
}
?>