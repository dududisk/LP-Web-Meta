<?php
$temperatura = floatval(readline("Digite a temperatura em graus Celsius: "));
if ($temperatura <= 18) {
$clima = "frio";
} elseif ($temperatura >= 19 && $temperatura <= 23) {
$clima = "agradável";
} elseif ($temperatura >= 24 && $temperatura <= 35) {
$clima = "quente";
} else {
$clima = "muito quente";
}
echo "O clima é $clima.\n";
?>