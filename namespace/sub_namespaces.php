<?php

///////////////// APP //////////////////////////////////////////////////
namespace App;
//namespace App2; // Sobrescrever o namespace atual '\App'
?>
<div class="titulo">Sub-Namespaces</div>

<?php
echo __NAMESPACE__ . '<br>'; // \App
const constante = 123;
/////////////////////////////////////////////////////////////////////////////////////////////



///////////////// APP\PRINCIPAL //////////////////////////////////////////////////
namespace App\Principal; // sub-namespaces
//namespace App\Erro; // sobrescrever o sub-namespace '\App\Principal'

echo __NAMESPACE__ . '<br>'; // \App\Principal
const constante = 234;

/////////////////////////////////////////////////////////////////////////////////////////////



///////////////// APP\PRINCIPAL\ESPECIFICO //////////////////////////////////////////////////
namespace App\Principal\Especifico;

echo __NAMESPACE__ . '<br>'; // \App\Principal\Especifico
const constante = 345;
/////////////////////////////////////////////////////////////////////////////////////////////



/////// ACESSAR OS VALORES DE CONSTANTES /////////////////////////////////////////////////////
echo constante . '<br>'; // 345 (PEGA O ATUAL NAMESPACE) // App/Principal/Especifico/constante
echo constant('\\' . __NAMESPACE__ . '\constante') . '<br>'; // 345 //App/Principal//Especifico/constante 

echo constant('\App\Principal\constante') . '<br>';  // 234 //App/Principal/constante
echo constant('\App\constante') . '<br>';  // 123 //App/constante
echo '<br><br>';

// OUTRO MEIO DE ACESSO AS CONSTANTES
echo \App\constante . '<br>';
echo \App\Principal\constante . '<br>';
echo \App\Principal\Especifico\constante;



/// ESTRUTURA IDEAL
// '\' raiz do PHP
//   '\App' namespace '\App'
//       '\App\Principal' sub-namespace 'Principal'
//           '\App\Principal\Especifico' sub-namespace Principal\Especifico
