<?php
header("Access-Control-Allow-Credentials:true");
header('Content-type:text/json');
header('Access-Control-Allow-Origin:http://10.30.29.65:63341');

//$data_json= ;
//echo $data_json;
session_start();
$username=$_SESSION['name'];
$data=array('userName'=>$username);
echo json_encode($data);

?>
