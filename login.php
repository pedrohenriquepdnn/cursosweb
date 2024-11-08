<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root";  // Altere para o seu usuário MySQL
$password = "";    // Altere para a sua senha MySQL
$dbname = "cadastroweb";

// Conectar ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Consulta para verificar se o usuário existe
    $sql = "SELECT id, senha FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    // Verifica se o usuário existe
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $senha_hash);
        $stmt->fetch();

        // Verificar a senha
        if (password_verify($senha, $senha_hash)) {
            // Iniciar sessão e redirecionar para a página "meus_cursos.html"
            session_start();
            $_SESSION['usuario_id'] = $id;
            header("Location: meus_cursos.html");
            exit();
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Usuário não encontrado.";
    }

    // Fechar a consulta
    $stmt->close();
} else {
    echo "Erro: Formulário não foi enviado corretamente.";
}

// Fechar a conexão
$conn->close();
?>
