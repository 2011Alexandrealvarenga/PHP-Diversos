<?php
session_start();

// Função para gerar o token CSRF
function gerarTokenCSRF() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // Gera um token aleatório
    }
    return $_SESSION['csrf_token'];
}

$csrf_token = gerarTokenCSRF();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário com CSRF</title>
</head>
<body>
    <h1>Formulário de Exemplo com CSRF</h1>
    
    <!-- Exibindo o token CSRF visivelmente -->
    <p><strong>Token CSRF gerado:</strong> <?php echo $csrf_token; ?></p>
    
    <!-- Formulário com o token CSRF oculto -->
    <form action="processar.php" method="POST">
        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>" />
        
        <!-- Outros campos do formulário -->
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br><br>
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
