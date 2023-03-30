<?php
    $num01 = $_POST["Numero1"];
    $num02 = $_POST["Numero2"];
    $soma = ($num01+$num02);
    if ($soma > 20) {
        echo "O resultado é: " .($soma + 8);
    }elseif($soma <= 20) {
        echo "O resultado é: ".($soma - 5);
    }
    ?>