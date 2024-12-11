<?php
// Definir o cabeçalho X-XSS-Protection para ativar a proteção (valor 1)
// Valor 1 ativa a proteção, e 0 desativa a proteção
header('X-XSS-Protection: 1; mode=block');

// Exemplo de conteúdo da página
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Proteção XSS</title>
</head>
<body>
    <p>inserido codigo para bloqueio de ataque xss</p>
</body>
</html>
