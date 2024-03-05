<?php
    //desafio 2 :
    function fibonacci($n) {
        $fib = array (0, 1);
        for ($i = 2; $i <= $n; $i++) {
            $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        }
        return $fib;
    }

    function IsInFibonacci($n, $fib) {
        return in_array($n, $fib);
    }
    $numero = 12; //alterar o valor aqui
    
    $fib = fibonacci($numero);
    if (IsInFibonacci($numero, $fib)){
        echo "O número $numero pertence a sequencia de fibonacci";
    } else {
        echo "O número $numero não pertence a sequencia de fibonacci";
    }
?>