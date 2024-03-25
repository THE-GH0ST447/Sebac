<?php
include("conectadb.php");
// COLETA VARIAVEL DE SESSÃO DO USUARIO JÁ LOGADO
session_start();
// SE USUARIO LOGADO - COLETA NOME SE NÃO APLICA N
if (isset($_SESSION["usuario"])) {
    $nomeusuario = $_SESSION['usuario'];
} else {
    $nomeusuario = 'n';
}
 
// Defina o caminho do arquivo que você deseja baixar
$arquivo = './assets/sebac.zip';
 
// Defina o nome do arquivo que será exibido para o usuário ao fazer o download
$nome = 'sebac.zip';
 
 
if ($nomeusuario == $_SESSION['usuario']) {
 // Verifica se o arquivo existe
 if(file_exists($arquivo)) {
    // Define os headers para forçar o download do arquivo
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . $nome . '"');
    header('Content-Length: ' . filesize($arquivo));
 
    // Lê o arquivo para download
    readfile($arquivo);
 
    // Encerra o script
    exit;
    } else {
        // Se o arquivo não existe, exibe uma mensagem de erro
        echo "<script>window.alert('Arquivo não encontrado.')</script>";
        echo "<script>window.location.href='index.php';</script>";
    }
}
   
       
else{
    echo "<script>window.alert('Você precisa estar logado para fazer o Download.')</script>";
    echo "<script>window.location.href='index.php';</script>";
}
 
 
 
?>