<?php
include("conectadb.php");
session_start();
if (isset($_SESSION["usuario"])) {
$nomeusuario = $_SESSION['usuario'];
} else {
    $nomeusuario = '';
}



?>






<header>
    <nav class="nav-bar">
        <div class="logo">
            <a href="https://www.sp.senac.br">
                <img src="assets/img/Sebac2.png" alt="Logo">
                <link rel="stylesheet" href="./assets/css/style3.css">
            </a>
        </div>

        <div class="nav-list">

            <ul>
                <li class="nav-item"><a href="index.php" class="nav-link">Inicio</a></li>
                <li class="nav-item"><a href="personagens.php" class="nav-link">Personagens</a></li>
                <li class="nav-item"><a href="armas.php" class="nav-link">Itens</a></li>
                <li class="nav-item"><a href="mapa.php" class="nav-link">Mapa</a></li>
                <li class="nav-item"><a href="integrantes.php" class="nav-link">Integrantes</a></li>
                <li class="nav-item"><a href="sobre.php" class="nav-link">Sobre</a></li>
</ul>

        </div>
        <div class="nav-list">
            <?php
            if ($nomeusuario != null) {
                // Defina o limite de caracteres para substituição
                $limite_caracteres = 8; // Pode ajustar conforme necessário
            
                // Verificar se o nome de usuário excede o limite de caracteres
                if (strlen($nomeusuario) > $limite_caracteres) {
                    $nomeusuario = substr($nomeusuario, 0, $limite_caracteres) . '...';
                }
                ?>
                <li class="nav-list">Olá
                    <?= strtoupper($nomeusuario) ?>
                </li>
                <div class="logout-button">
                    <button id="sair" class="button-anima"><a href="logout.php">Sair</a></button>
                </div>
                <?php
            } else {
                ?>
                <div class="login-button">
                    <button id="login" class="button-anima"><a href="login.php">Login</a></button>
                   
                </div>
                <?php
            }
            ?>
        </div>





        <div class="mobile-menu-icon">
            <button onclick="menuShow()"><img class="icon" src="assets/img/menu_white_36dp.svg"></button>
        </div>
    </nav>

    <div class="mobile-menu">
        <ul>
            <li class="nav-item"><a href="index.php" class="nav-link">Inicio</a></li>
            <li class="nav-item"><a href="personagens.php" class="nav-link">Personagens</a></li>
            <li class="nav-item"><a href="armas.php" class="nav-link">Itens</a></li>
            <li class="nav-item"><a href="mapa.php" class="nav-link">Mapa</a></li>
            <li class="nav-item"><a href="integrantes.php" class="nav-link">Integrantes</a></li>
            <li class="nav-item"><a href="sobre.php" class="nav-link">Sobre</a></li>

            

        </ul>
        <div class="nav-list">
            <?php
            if ($nomeusuario != null) {
                // Defina o limite de caracteres para substituição
                $limite_caracteres = 8; // Pode ajustar conforme necessário
            
                // Verificar se o nome de usuário excede o limite de caracteres
                if (strlen($nomeusuario) > $limite_caracteres) {
                    $nomeusuario = substr($nomeusuario, 0, $limite_caracteres) . '...';
                }
                ?>
                
                
                <?php
            } else {
                ?>
                
                <?php
            }
            ?>
        </div>

        <div class="login-button">
            <button id="login" class="button-anima"><a href="login.php">Login</a></button>
            

        </div>
        <div class="logout-button">
            <button id="sair" class="button-anima"><a href="logout.php">Sair</a></button>
        </div>
    </div>
</header>


