<?php


function ordenarValores($valores) {
    
    $pares = [];
    $impares = [];

    foreach ($valores as $valor) {
        if ($valor % 2 == 0) {
            $pares[] = $valor;
        } else {
            $impares[] = $valor;
        }
    }   
    sort($pares);    
    rsort($impares);   
    return array_merge($pares, $impares);
}
$n = intval(trim(fgets(STDIN)));
$valores = [];

for ($i = 0; $i < $n; $i++) {
    $valores[] = intval(trim(fgets(STDIN)));
}

$valoresOrdenados = ordenarValores($valores);

foreach ($valoresOrdenados as $valor) {
    echo $valor . "\n";
}

?>