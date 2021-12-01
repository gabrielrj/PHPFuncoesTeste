<?php

function primoInferior(string $numero) : string{
    if(!is_numeric($numero))
        return 'Insira um número válido';

    $numero = intval($numero);

    if($numero < 0)
        return '0 (zero)';

    $primo = 0;

    for ($possivelPrimo = ($numero - 1); $possivelPrimo >= 1; $possivelPrimo--){
        if($primo !== 0)
            break;

        for ($i = ($possivelPrimo - 1); $i >= 1; $i--){
            if(($i !== 1 && $i !== $possivelPrimo) && $possivelPrimo % $i === 0) {
                $primo = 0;
                break;
            }
            else
                $primo = $possivelPrimo;
        }
    }

    if($primo === 0)
        return 'Não foram encontrados números primos inferiores ao parâmetro informado.';
    else
        return 'Número primo inferior: '. strval($primo);

}

$queries = array();

parse_str($_SERVER['QUERY_STRING'], $queries);

echo primoInferior($queries['numero']);
