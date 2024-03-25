<?php
include("conectadb.php");

session_start(); // Inicia a sessão

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Recebe os dados do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $login = $_POST['login']; // Pode ser tanto email quanto nome de usuário
    $senha = md5($_POST['senha']); // Utilizando md5 para criptografar a senha

    // Verifica se o email ou nome de usuário e senha correspondem a um usuário cadastrado
    $sql = "SELECT * FROM usuarios WHERE (usu_email = '$login' OR usu_nome_usuario = '$login') AND usu_senha = '$senha'";
    $result = $conn->query($sql);

    

    if ($result->num_rows > 0) {
        // Login bem-sucedido, armazena o nome de usuário na sessão e redireciona para a página de destino
        $_SESSION['usuario'] = $login;
        header("Location: index.php");
        exit();

    } else {
        // Credenciais inválidas, exibe mensagem de erro
        echo "<script>window.alert('Email ou nome de usuário, ou senha incorretos. Por favor, tente novamente.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/Sebac2.png" type="image/png">
    <link rel="stylesheet" href="assets/css/css.css">
    <title>Login</title>
</head>

<body style="background-image: url('/Sebac/assets/imagens/teste.jpg');">
    
   <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <form action="login.php" method="POST">
        <label for="login">Email ou Nome de Usuário:</label>
        <input type="text" name="login" required><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>

        <input type="submit" value="Entrar">
        <br>
      <a href="cadastro.php" class="nav-link"><h4> não tem cadastro?... Ta esperando o que bobão?</h4></a>
    </form>
</body>

</html>
