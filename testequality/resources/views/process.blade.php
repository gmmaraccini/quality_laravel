<?php

$notas = $_REQUEST['nota'];

$valorOriginal = $_REQUEST['valorSaque'];



shuffle($notas);
echo "<h1><strong>Primeira sequencia:</h1></strong>";
separarNotas($notas,$valorOriginal);
asort($notas);
echo "<h1><strong>Segunda sequencia:</strong></h1>";
separarNotas($notas,$valorOriginal);
arsort($notas);
echo "<h1><strong>Terceira sequencia:</strong></h1>";
separarNotas($notas,$valorOriginal);




function separarNotas($notas,$valorOriginal) {

  
  $valorTemp = $valorOriginal;
  $separacaoNotas = "";
  foreach($notas as $nota) {
    
      //echo "$valorTemp % $nota = " . ($valorTemp%$nota) . "<br>" ;
      $valor = ($valorTemp/$nota);
      $valorTemp = ($valorTemp%$nota);
      if(floor($valor) != 0)  {
       $separacaoNotas .= "Sao necessarias <strong>" . floor($valor) . "</strong> notas de <strong>R$ $nota</strong> <br>";

      }
  }



  
      if($valorTemp > 0) {

        echo "ERRO - NÃO TEM NOTA SUFICIENTE PARA ESSE VALOR<br>";
      } else {
        echo $separacaoNotas;
      }
}


