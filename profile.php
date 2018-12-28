<?php
header("Access-Control-Allow-Credentials:true");
header('Content-type:text/json');
header('Access-Control-Allow-Origin:http://10.30.29.65:63341');
$data=array('userName'=>'123');
//$data_json= ;
//echo $data_json;
echo json_encode($data);

?>
