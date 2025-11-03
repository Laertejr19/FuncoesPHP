<?php
// --- STRINGS ---
echo "--- STRINGS ---\n";

$texto = "Olá, Mundo!";
echo "strlen(): " . strlen($texto) . "\n"; // 11

$frase = "Eu gosto de maçã.";
$nova_frase = str_replace("maçã", "banana", $frase);
echo "str_replace(): " . $nova_frase . "\n"; // Eu gosto de banana.

$email = "contato@exemplo.com";
echo "substr(): " . substr($email, 8) . "\n"; // exemplo.com
echo "substr(): " . substr($email, 0, 7) . "\n"; // contato

$texto2 = "Isso É Um TESTE";
echo "strtolower(): " . strtolower($texto2) . "\n"; // isso é um teste
echo "strtoupper(): " . strtoupper($texto2) . "\n"; // ISSO É UM TESTE

$nome = "joão";
echo "ucfirst(): " . ucfirst($nome) . "\n"; // João

$entrada = " olá ";
echo "trim(): '" . trim($entrada) . "'\n"; // olá

$data = "29-10-2025";
$partes = explode("-", $data);
echo "explode(): Dia = " . $partes[0] . "\n"; // 29

$array = ["Maçã", "Banana", "Laranja"];
echo "implode(): " . implode(", ", $array) . "\n"; // Maçã, Banana, Laranja

$frase3 = "O gato subiu no telhado.";
$posicao = strpos($frase3, "gato");
echo "strpos(): " . ($posicao !== false ? $posicao : "Não encontrado") . "\n"; // 2

$nome2 = "Maria";
$idade2 = 30;
echo "sprintf(): " . sprintf("O nome dela é %s e ela tem %d anos.", $nome2, $idade2) . "\n";

// --- NÚMEROS ---
echo "\n--- NÚMEROS ---\n";

$preco = 1250.75;
echo "number_format(): " . number_format($preco, 2, ',', '.') . "\n"; // 1.250,75

echo "round(): " . round(4.3) . " | " . round(4.7) . " | " . round(2.3456, 2) . "\n"; // 4 | 5 | 2.35
echo "ceil(): " . ceil(4.3) . "\n"; // 5
echo "floor(): " . floor(4.7) . "\n"; // 4
echo "abs(): " . abs(10 - 25) . "\n"; // 15
echo "mt_rand(1,10): " . mt_rand(1, 10) . "\n"; // número aleatório

echo "max(): " . max(5, 10, 2, 8) . "\n"; // 10
echo "min(): " . min(5, 10, 2, 8) . "\n"; // 2
echo "pow(): " . pow(2, 3) . "\n"; // 8
echo "sqrt(): " . sqrt(9) . "\n"; // 3

// Verificação de tipos
echo "is_numeric(123): " . (is_numeric(123) ? "true" : "false") . "\n"; // true
echo "is_int(123.45): " . (is_int(123.45) ? "true" : "false") . "\n"; // false
echo "is_float(123.45): " . (is_float(123.45) ? "true" : "false") . "\n"; // true

// --- ARRAYS ---
echo "\n--- ARRAYS ---\n";

$frutas = ["Maçã", "Banana", "Laranja"];
echo "count(): " . count($frutas) . "\n"; // 3

array_push($frutas, "Abacaxi");
print_r($frutas);

$ultimo = array_pop($frutas);
echo "array_pop(): " . $ultimo . "\n";
$primeiro = array_shift($frutas);
echo "array_shift(): " . $primeiro . "\n";

$config = ['usuario' => 'admin', 'senha' => '123'];
echo "array_key_exists('usuario'): " . (array_key_exists('usuario', $config) ? "true" : "false") . "\n";

$permissoes = ['ler', 'escrever', 'executar'];
echo "in_array('escrever'): " . (in_array('escrever', $permissoes) ? "true" : "false") . "\n";

$array1 = ["a","b"];
$array2 = ["c","d"];
$resultado = array_merge($array1, $array2);
print_r($resultado);

$capitais = ['Brasil'=>'Brasília','Portugal'=>'Lisboa'];
print_r(array_keys($capitais));
print_r(array_values($capitais));

// --- DATA/HORA ---
echo "\n--- DATA/HORA ---\n";

$agora = new DateTime();
echo "Data/Hora atual: " . $agora->format('d/m/Y H:i:s') . "\n";

$natal = new DateTime('2025-12-25');
echo "Natal: " . $natal->format('d/m/Y') . "\n";

$hoje = new DateTime();
$hoje->modify('+10 days');
echo "Daqui a 10 dias: " . $hoje->format('d/m/Y') . "\n";

$data_nasc = DateTime::createFromFormat('d/m/Y','15/05/1990');
$intervalo = $agora->diff($data_nasc);
echo "Idade: " . $intervalo->y . " anos\n";
echo "Diferença total de dias: " . $intervalo->days . "\n";

// --- EXEMPLO COMPLETO DE RELATÓRIO ---
echo "\n--- RELATÓRIO COMPLETO ---\n";

$dados = [
    'nome' => ' josé da silva ',
    'email' => 'JOSE.SILVA@EMAIL.COM',
    'nasc' => '15/05/1990',
    'compras' => '120.50, 80.00, 15.75, 250.00, 99.90'
];

$nome_limpo = ucwords(strtolower(trim($dados['nome'])));
$email_limpo = strtolower($dados['email']);
$compras = explode(',', $dados['compras']);

$total_compras = count($compras);
$valor_total = array_sum($compras);
$maior = max($compras);
$menor = min($compras);
$media = ($total_compras>0)? round($valor_total/$total_compras,2):0;

$nasc_obj = DateTime::createFromFormat('d/m/Y', $dados['nasc']);
$idade = $agora->diff($nasc_obj)->y;

echo sprintf("Nome: %s\nE-mail: %s\nIdade: %d anos\n", $nome_limpo, $email_limpo, $idade);
echo "Total de compras: $total_compras\n";
echo "Valor total: R$ " . number_format($valor_total,2,',','.') . "\n";
echo "Média: R$ " . number_format($media,2,',','.') . "\n";
echo "Maior compra: R$ " . number_format($maior,2,',','.') . "\n";
echo "Menor compra: R$ " . number_format($menor,2,',','.') . "\n";
?>
