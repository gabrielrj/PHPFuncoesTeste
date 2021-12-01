<?php

function seculoAno(string $ano) : string{
    if(!is_numeric($ano))
        return 'Insira um ano válido';

    //Regra 1: Entre o ano 1 e o ano 100 retorna obrigatóriamente o século primeiro
    if(intval($ano) >= 1 && intval($ano) <= 100)
        return 'Século 1';

    $doisUltimosDigitos = substr($ano, strlen($ano), 2);

    //Regra 2: Se o ano termina com 2 zeros, então eliminando os 2 zeros você obtem o século
    if($doisUltimosDigitos === '00')
        return 'Século '.substr_replace($ano,'', -2,2);
    else {
        //Regra 3: Se o ano não termina com 2 zeros, então ao eliminar os dois ultimos algarismos e somar o que resta com 1 você obtem o século.
        $seculo = intval(substr_replace($ano,'', -2,2)) + 1;

        return 'Século '.$seculo;
    }

}

$queries = array();

parse_str($_SERVER['QUERY_STRING'], $queries);

echo seculoAno($queries['ano']);
