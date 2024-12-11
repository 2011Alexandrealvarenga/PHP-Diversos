<?php
session_start();

// Função para verificar o token CSRF
function verificarTokenCSRF($token) {
    if (isset($_SESSION['csrf_token']) && $_SESSION['csrf_token'] === $token) {
        return true;
    }
    return false;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se o token CSRF foi enviado e é válido
    if (!isset($_POST['csrf_token']) || !verificarTokenCSRF($_POST['csrf_token'])) {
        die("Token CSRF inválido ou ausente. Requisição rejeitada.");
    }

    // Processar o formulário
    $nome = htmlspecialchars($_POST['nome']); // Protege contra XSS

    // Exibir a confirmação e o token CSRF
    echo "<h1>Formulário Processado com Sucesso</h1>";
    echo "<p>Nome: $nome</p>";
    echo "<p><strong>Token CSRF enviado:</strong> " . $_POST['csrf_token'] . "</p>";

    // Remover o token CSRF após o uso (opcional)
    unset($_SESSION['csrf_token']);
}
?>
