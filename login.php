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