<?php
    function fibonacci($n) {
        $a = 0;
        $b = 1;
        $c = 1;
        for ($i = 1; $i < $n ; $i++) { 
            $c = $a + $b;
            echo "$c \n";
            $a = $b;
            $b = $c;
        }
        return $c;
    }
    echo fibonacci(20) ."\n";
?>