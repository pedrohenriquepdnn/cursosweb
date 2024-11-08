<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "root";  // Altere para seu usuário MySQL
$password = "";    // Altere para sua senha MySQL
$dbname = "cadastroweb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber dados do formulário
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $senha = isset($_POST['senha']) ? password_hash($_POST['senha'], PASSWORD_DEFAULT) : '';
    $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';

    // Verificar se algum campo obrigatório está vazio
    if (empty($nome) || empty($email) || empty($senha) || empty($telefone)) {
        echo "Todos os campos são obrigatórios!";
    } else {
        // Preparar e executar a consulta SQL
        $sql = "INSERT INTO usuarios (nome, email, senha, telefone) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $nome, $email, $senha, $telefone);

        if ($stmt->execute()) {
            // Se o cadastro for bem-sucedido, redirecionar para a tela de login
            header("Location: login.html");  // Substitua "login.php" pelo nome correto do seu arquivo de login
            exit();  // Interrompe o script para garantir que o redirecionamento aconteça
        } else {
            echo "Erro ao cadastrar: " . $stmt->error;
        }

        // Fechar a conexão com o banco de dados
        $stmt->close();
    }
} else {
    echo "Erro: Formulário não foi enviado corretamente.";
}

// Fechar a conexão com o banco de dados
$conn->close();
?>