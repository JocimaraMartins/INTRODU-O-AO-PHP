<?php

$idade = 25;
$nome = 'Jocimara';
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver mais que 18 anos" .PHP_EOL;
echo "ou a partir de 16 acompanhado" .PHP_EOL;

if ($idade >= 18 and $nome == 'Jocimara')
{
    echo "Você tem $idade anos." .PHP_EOL;
    echo 'Pode entrar sozinho';
}
else if($idade>= 16 and $numeroDePessoas >1)
    {
        echo "Você tem $idade anos, está acompanhado(a), então pode entrar";
    }
    else
        echo "Você só tem $idade anos.Você não pode entrar";


echo PHP_EOL;
echo "Adeus!";



