<?php 
// permite acesso
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Content-Type: application/json");

// transforma array em json
echo json_decode($array);
exit;
?>