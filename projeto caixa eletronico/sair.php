<?php 
session_start();

// tirar a sessao
unset($_SESSION['banco']);
header("location: index.php");
exit;

?>