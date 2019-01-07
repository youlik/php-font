<?php
header("Access-Control-Allow-Credentials:true");
header('Content-type:text/json');
header('Access-Control-Allow-Headers:Content-Type');
header('Access-Control-Allow-Origin:http://10.30.29.65:63341');
$message=array('message'=>'success');
echo json_encode($message);
session_start();
session_destroy();
?>