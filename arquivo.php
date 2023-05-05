<?php 
function exibeMensagem(string $texto): void 
{
    echo $texto;
}

$texto = "Olá mundo!";

exibeMensagem($texto);
?>