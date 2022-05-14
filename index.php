<?php

$categorias = [];

$categorias[] = 'infantil';
$categorias[] = 'juvenil';

print_r($categorias);

echo "ola mundo \n";


$a = 1;
$b = 2;
$x = 0;

#condicionais if, else if, else, switch
if($a == $b){
    echo "true \n";
}else{
    echo "false \n";
}

#repetição while, do while, for, foreach
while($x < $b){
    echo "$x\n";
    $x++;
}

?>