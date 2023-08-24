<?php
// Lê os dois números do usuário
$numero1 = floatval(readline("Digite o primeiro número: "));
$numero2 = floatval(readline("Digite o segundo número: "));
echo "Escolha a opção:\n";
echo "1- Soma de 2 números.\n";
echo "2- Diferença entre 2 números (maior pelo menor).\n";
echo "3- Produto entre 2 números.\n";
echo "4- Divisão entre 2 números (o denominador não pode ser zero).\n";
$opcao = (int)readline("Digite o número da opção desejada: ");
switch ($opcao) {
case 1:
$resultado = $numero1 + $numero2;
echo "Resultado: $resultado\n";
break;
case 2:
$diferenca = abs($numero1 - $numero2);
echo "Resultado: $diferenca\n";
break;
case 3:
$produto = $numero1 * $numero2;
echo "Resultado: $produto\n";
break;
case 4:
if ($numero2 != 0) {
$divisao = $numero1 / $numero2;
echo "Resultado: $divisao\n";
} else {
echo "Denominador não pode ser zero.\n";
}
break;
default:
echo "Opção inválida.\n";
}
?>