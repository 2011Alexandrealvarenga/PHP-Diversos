<?php 
// CURL - fazer requisicoes a outros sites externos

// iniciar a biblioteca
$ch = curl_init();

// indicar a url que sera feita a requisição
curl_setopt($ch, CURLOPT_URL, "http://www.checkitout.com.br/wb/pingpong");

// metodo de envio
curl_setopt($ch, CURLOPT_POST, 1);

// enviar os campos
curl_setopt($ch, CURLOPT_POSTFIELDS, "nome=Bonieky&idade90&sexo=masculino");

// receber os campos
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// recebo a posta
$resposta = curl_exec($ch);
curl_close($ch);

print_r($resposta);
?>