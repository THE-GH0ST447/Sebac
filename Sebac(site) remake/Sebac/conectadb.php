<?php
  ## ARQUIVO DE ACESSO AO BANCO DE DADOS ##
    ## ALERTA EM MODO PROFISSIONAL ARQUIVO DEVE-SE MANTER OCULTO E PROTEGIDO ##

    ## LOCALIZA O PC OU SERVIDOR COM O BANCO (NOME DO COMPUTADOR)
    $servidor = "localhost";
    ## NOME DO BANCO
    $banco = "id21917162_sebac";
    ##USUARIO DE ACESSO
    $usuario = "id21917162_root";
    ##SENHA DO USUARIO
    $senha = "Poggers123!";

    #LINK DE CONEXÃO
    $conn = mysqli_connect($servidor, $usuario, $senha, $banco);

?>
