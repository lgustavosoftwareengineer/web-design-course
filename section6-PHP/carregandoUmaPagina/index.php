<?php
/* Define a página atual pela URL */
$pagina = 'home';

// Se existir um valor dado para a variavel global $_GET a variavel $pagina recebe esse valor
// A variavel $_GET nada mais é do que um variavel que pode ser passada através da url
if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
}
 
/* Carrega o header.php */
include 'header.php';
 
/* Carrega a página escolhida pelo usuário */
switch ($pagina) {
    case 'equipe':
        include 'equipe.php';
        break;
 
    default:
        include 'home.php';
        break;
}
 
/* Carrega o footer.php */
include 'footer.php';