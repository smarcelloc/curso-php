<div class="titulo">Datas #01</div>

<?php

echo time() . '<br>'; // timestamp (1600465712)

echo date('D, d \d\e M \d\e Y H:i A') . '<br>'; // Fri, 18 de Sep de 2020 21:48 PM
// @link https://www.php.net/manual/pt_BR/function.date.php



echo strftime('%A, %d de %B de %Y', time()) . '<br>'; // converter o formato do TIMESTAMP em DATA () // Friday, 18 de September de 2020

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8'); // SETAR A LOCALIZAÇÃO EM PT_BR
/*
LC_ALL para tudo abaixo
LC_COLLATE para comparação de strings, veja strcoll()
LC_CTYPE para classificação de caracteres e conversão, por exemplo strtoupper()
LC_MONETARY para localeconv()
LC_NUMERIC para o separador decimal (Veja também localeconv())
LC_TIME para formatação de data e hora com strftime()
*/

echo strftime('%A, %d de %B de %Y', time()) . '<br>'; // sexta-feira, 18 de setembro de 2020

$amanha = time() + (24 * 60 * 60); // sábado, 19 de setembro de 2020 
echo strftime('%A, %d de %B de %Y', $amanha) . '<br>'; // 

$proximaSemana = strtotime('+10 year');
echo strftime('%A, %d de %B de %Y', $proximaSemana) . '<br>';

$dataFixa = mktime(15, 30, 50, 1, 25, 1975); // CRIAR DATAS EM TIMESTRIMP
echo strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa); // sábado, 25 de janeiro de 1975 - 15:30:50
