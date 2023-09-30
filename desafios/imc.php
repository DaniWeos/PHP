<?php

$peso = 150;
$altura = 1.60;


$imc = $peso / ($altura **2);

if ($imc <= 18.5){
    echo "Baixo peso";
} else if($imc > 18.5 && $imc < 24.9){
    echo "Peso Normal";
} else if($imc > 25 && $imc < 29.9){
    echo "Sobre Peso";
} else {
    echo "Obesidade";
}
