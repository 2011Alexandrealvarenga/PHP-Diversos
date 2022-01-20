<?php 
require '../config.php';

$array =[];

$array ['pong'] = true;

// permite acesso
header("Access-Control-Allow-Origin: *");/

// transforma array em json
echo json_decode($array);
exit;