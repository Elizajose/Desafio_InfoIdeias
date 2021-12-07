<?php
function PrimoInferior($num){
    $primoInferior = 0;
    if($num <= 0){
        print(0);
    }else{
        for($i=1; $i <= $num; $i++){
            if(($i % 2) != 0){
                $primoInferior = $i;
            }
        }
        echo "O maior primo inferior de {$num} é {$primoInferior}";
    }
}

PrimoInferior(10);

PrimoInferior(30);