<?php
	
    $n = (int)(readline("Digite um número N: "));
    $soma = 0;
    $i = 1;
    
    while ($i <= $n):
        $soma += $i;
        $i++;
    endwhile;
    
    echo "A soma dos números de 1 a $n é = $soma";
?>