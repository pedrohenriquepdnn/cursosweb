<?php
session_start();

$servername = "localhost";
$username = "root";  
$password = "24177551";  
$dbname = "cadastroweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT id, senha FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {

    $user = $result->fetch_assoc();
    
    if (password_verify($senha, $user['senha'])) {
        $_SESSION['user_id'] = $user['id'];
        header("Location: meus_cursos.php");
        exit();
    } else {
        echo "Senha incorreta. Tente novamente.";
    }
} else {
    echo "Usuário não encontrado.";
}
$stmt->close();
$conn->close();
?>

