<div class="titulo">Gerenciando Sessão</div>

<?php
// session_id('bf1ttq6eujqi7i2fn4rbtujgi6'); // SEMPRE ANTES DO SESSION_START 
                                             // SEQUESTRAR SESSÃO
session_start();
echo session_id();

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;
echo '<br>' . $_SESSION['contador'];

if($_SESSION['contador'] % 5 === 0)  {
    session_regenerate_id(); // REGENERATE SESSÃO
                            // PARA EVITAR ROUBO DE SESSÃO
}

if($_SESSION['contador'] >= 15) {
    session_destroy();
}