<?php
echo "Tabela de conversão de polegadas para centímetros:\n";
echo "\n";
echo "Polegadas | Centímetros\n";
echo "\n";
for ($polegada = 1; $polegada <= 20; $polegada++) {
$centimetro = $polegada * 2.54;
printf("%-12d| %-10.2f\n", $polegada, $centimetro);
}
echo "\n";
?>