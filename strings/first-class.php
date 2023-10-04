<?php

$nome = 'Daniel';



$ehDaFamilia = (str_contains($nome, 'Cruz')); // verifico se uma string esta dentro de outra

if($ehDaFamilia == true){
    echo "$nome é da minha familia";
} else{
    echo "$nome não é da minha familia";
}
