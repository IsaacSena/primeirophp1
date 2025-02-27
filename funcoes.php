<?php

//
//

$num1 = 0; //Instanciar uma variavel
$num2 = 0; 
$num3 = 0;
$num4 = 0;
$num5 = 0;
$num6 = 0;
$num7 = 0;
$num8 = 0;
$num9 = 0;
$num10 = 0;
$resultadomedia = 0;
$soma = 0;
$nomeCor = "";
$saldoatual = 0;






$resultado;

function somar($num1,$num2){
return $num1 + $num2;

}//Fim do método

function exercicio07($tBrancos,$tValidos,$tNulos,$tEleitores){
    if (($tBrancos + $tValidos + $tNulos) == $tEleitores) {
        $pBrancos = porcentagemEleitores($tBrancos,$tEleitores);
        $pValidos = porcentagemEleitores($tValidos, $tEleitores);
        $pNulos = porcentagemEleitores($tNulos, $eleitores);
        return "Votos brancos: $pBrancos%\n
                Votos nulos: $pNulos%\n
                Votos validos: $pValidos%";
    }else {
        return "Total de eleitores inválido";
    }
}
function porcentagemEleitores($total,$eleitores){
    return ($total * 100)/$eleitores;
}

function subtrair($num1,$num2){
    return $num1 - $num2;
}//Fim do método

function divisao($num1,$num2){
    if($num2 <= 0){
        return "Impossível dividir por zero!";
    }else{
        return $num1/$num2;
    }
}//Fim do método

function multiplicar($num1,$num2){
    return $num1 * $num2;
}//Fim do método

function media2($num1,$num2){
    return ($num1 + $num2)/2;
}//Fim do método

function calcularmedia($num1,$num2,$num3){

    return ($num1 + $num2 + $num3)/3;
}   

function menos1($num1){
    return $num1 - 1;
}

function reajusteSalario($num1,$num2){
    return  ($num2 / 100 )* $num1 + $num1;
            
}

function custoFabrica($num1,$num2,$num3){
        
    $primeirapor = ($num2 / 100) * $num1;
    $segundapor = ($num3 / 100) * ($num1 + $primeirapor);
    return $num1 + $primeirapor + $segundapor;
                    
}

function vendasComissao($num1,$num2,$num3,$num4){
    $primeirapor = ($num2 * $num4);
    $segundapor = ($num3 * 0.05);
    return $num1 + $primeirapor + $segundapor;
}

function qualcularIdade($num1,$num2,$num3){
    return ($num1 * 365) + ($num2 * 30) + $num3;
}

function vendasMacas($num1){
    if ($num1 < 12) {
        return $num1 ." Maçãs da um total de ". "R$" .$num1 * 1.30 . " Reais";
    } else {
        return $num1 ." Maçãs da um total de ". "R$" .$num1 * 1 . " Reais";
    }
}

function vendedorEmpresa($num1,$num2){
    if ($num2 <= 1500) {
        return "O funcionário receberá " . "R$" . $num1 + ($num2 * 0.03) . " Reais este mês";
    }elseif ($num2 > 1500) {
        return "O funcionário receberá " . "R$" . $num1 + (1500 * 0.03) + ($num2 * 0.05) . " Reais este mês";
    }
}

function saldoBancario($num1,$num2,$num3,$num4){
    $saldoatual = $num1 - $num2 + $num3;
    if ($saldoatual >= 0) {
        return "\nNúmero da conta " . $num4 . "\nSaldo positivo de " . "R$". $saldoatual . " Reais";
    }else{
        return "\nNúmero da conta " . $num4 . "\nSaldo negativo de " . "R$" . $saldoatual . " Reais";
    }
}

function multiplicacao($num1,$num2){
    if ($num1 >= 1 && $num1 <= 10) {
        for ($i=0; $i < 11; $i++) { 
            echo "\n" . "$num1 x $i = " . $num1 * $i;
        }
    }else {
        return "Digite um número entre 1 e 10";
    }
}

function lerNumeros($num1){
    if ($num1 >= 1) {
        for ($i=1; $i < $num1; $i++) { 
            echo "-" . $i;
        }
    } else {
        return "Digite um número a partir 1";
    }
}




?>

