<?php

$num1 = (float) readline("Introduce el primer número: ");
$num2 = (float) readline("Introduce el segundo número: ");

function division($num1, $num2){
    
    try{ 
        if ($num2 == 0){
            throw new DivisionByZeroError();
        }else{
            $result = $num1 / $num2;
            echo "El resultado de la división es: " . $result;
        }

}catch( DivisionByZeroError $e){
    echo "Ha ocurrido un error. No se puede dividir por cero"; 
}

}

division($num1, $num2); 

?>