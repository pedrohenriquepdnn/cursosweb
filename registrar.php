<?php
$servername = "localhost";
$username = "root";
$password = "24177551";    
$dbname = "cadastroweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $senha = isset($_POST['senha']) ? password_hash($_POST['senha'], PASSWORD_DEFAULT) : '';
    $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';

    if (empty($nome) || empty($email) || empty($senha) || empty($telefone)) {
        echo "Todos os campos são obrigatórios!";
    } else {
        $sql = "INSERT INTO usuarios (nome, email, senha, telefone) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $nome, $email, $senha, $telefone);

        if ($stmt->execute()) {
            header("Location: login.html");
            exit();
        } else {
            echo "Erro ao cadastrar: " . $stmt->error;
        }
        $stmt->close();
    }
} else {
    echo "Erro: Formulário não foi enviado corretamente.";
}
$conn->close();
?>