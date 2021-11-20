<?php


/**
 * O objetivo função localizar em A um par de números distintos cuja soma seja igual a S
 */

$dados = array(1,3,6,7,9,12,14,15);

function soma(array $lista, $s) {

    $result= 0;

     for ($i = 0; $i < count($lista); $i++){

         for ($e = 0; $e < count($lista); $e++){

             $primeiro = $lista[$i];

             $somanumeros = $primeiro + $lista[$e];

             if($somanumeros == $s){
                 $result = 1;

                 $resultado =  $primeiro .",". $lista[$e]  ;
             }
         } // segundo for
     } // Primeiro for

    if($result == 1){

        return $resultado;
    }else{

        return "-1,-1";
    }
}

echo soma($dados,6584);