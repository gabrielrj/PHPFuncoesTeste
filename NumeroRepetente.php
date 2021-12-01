<?php

function numeroRepetente(): string
{
    $arr = [];

    for ($i = 1; $i <= 20; $i++)
        array_push($arr, rand(1, 10));

    $arrFrequencia = array_count_values($arr);

    sort($arrFrequencia);

    $frequenciaMaxima = $arrFrequencia[count($arrFrequencia) - 1];

    $arrFrequencia = array_reverse($arrFrequencia, true);

    $resultado = 'O(s) número(s) que mais se repete(m) é(são): <br><br> <ul>';

    foreach ($arrFrequencia as $key => $value){
        if($value === $frequenciaMaxima){
            $resultado = $resultado.'<li>Número '.$key.'</li>';
        }else
            break;
    }

    return $resultado.'</ul><p>Quantidade de repetições: ' . $frequenciaMaxima . '</p>';
}


echo numeroRepetente();
