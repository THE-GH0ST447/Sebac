<?php
    include("conectadb.php"); // Certifique-se de que o arquivo esteja correto e tenha a extensão .php

 // Verifica se o usuário já acessou a página
if (!isset($_SESSION['visitou'])) {
    // Verifica se o IP já foi registrado
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $query = "SELECT COUNT(*) as ip_count FROM contagem WHERE ip_address = '$ip_address'";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    $ip_count = $row['ip_count'];

    // Se o IP não estiver registrado, registra o acesso
    if ($ip_count == 0) {
        $query = "INSERT INTO contagem (ip_address) VALUES ('$ip_address')";
        $conn->query($query);
    }

    // Marca o usuário como visitante
    $_SESSION['visitou'] = true;
}

// Recupera o número de acessos
$query = "SELECT COUNT(*) as acessos FROM contagem";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$acessos = $row['acessos'];


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Contador de Acessos</title>
    <link rel="stylesheet" href="assets/css/contador.css">
</head>

<body>
    <div class="container">
        <h1>Seja Bem-vindo!</h1>
        <p>
            "Esta página foi criada com o intuito de saber quantos querem 
            descobrir a identidade secreta do SEXTO MEMBRO, uma figura enigmática que intrigou a 
            todos com suas ações misteriosas. Se você está ansioso para desvendar esse mistério e 
            fazer parte desse intrigante enigma, continue compartilhando a pagina e então ele revelara sua identidade. 
            Estamos prestes a revelar segredos que irão surpreendê-lo e mudar sua percepção para sempre. 
            Prepare-se para desvendar os segredos mais profundos e obscuras verdades. Junte-se a nós nesta 
            busca pela verdade e desvende o enigma do SEXTO MEMBRO."</p>
        <?php
        echo "<h1>$acessos pessoas acessaram esta página!</h1>";
        ?>
    </div>
</body>
</html>

