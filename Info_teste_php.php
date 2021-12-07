<?php
function seculoAno($ano){
       //Converte o ano em uma string
       $ano = strval($ano);
      
       
       if(substr($ano,2) == "00"){
         $seculo = intval($ano / 100);
       }
       else{
          
          $seculo = intval($ano / 100)+1; 
       }
       //Retorna o resultado
       return "ano = ". $ano." século = ".$seculo;
   }
   //Mostra os valores 
   echo seculoAno(1905);
   echo seculoAno(1700);
   
  
?>