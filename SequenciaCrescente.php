<?php

function isOrdered(array $arr): bool{
    $isOrdered = true;

    for ($i = 1; $i < count($arr); $i++){
        if($arr[$i - 1] >= $arr[$i]){
            $isOrdered = !$isOrdered;
            break;
        }
    }

    return $isOrdered;
}

function sequenciaCrescente(array $arr) : bool{
    if (count($arr) === 0)
        return false;
    elseif(count($arr) === 1)
        return true;

    $resultado = false;

    for($i = 0; $i < count($arr); $i++){
        $arrParaComparacao = $arr;
        array_splice($arrParaComparacao, $i, 1);

        if(isOrdered($arrParaComparacao)){
            $resultado = true;
            break;
        }
    }

    return $resultado;
}

//Tem que dar true
$arr1 = [123, -17, -5, 1, 2, 3, 12, 43, 45];

//Tem que dar false
$arr2 = [3, 6, 5, 8, 10, 20, 15];

//Tem que dar true
$arr3 = [1, 2, 3, 4, 99, 5, 6];

//Tem que dar true
$arr4 = [1, 2, 3, 4, 3, 6];

//Tem que dar false
$arr5 = [40, 50, 60, 10, 20, 30];

//Tem que dar false
$arr6 = [1, 3, 2, 1];

//Tem que dar true
$arr7 = [1, 3, 2];

$retorno = sequenciaCrescente($arr7);

if($retorno)
    echo 'True';
else
    echo 'False';

