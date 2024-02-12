<?php
if (isset($_POST['submit'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];

    switch ($operation) {
        case 'add':
            $result = $number1 + $number2;
            break;
        case 'subtract':
            $result = $number1 - $number2;
            break;
        case 'multiply':
            $result = $number1 * $number2;
            break;
        case 'divide':
            if ($number2 == 0) {
                echo "Nelze dělit nulou!";
                return;
            } else {
                $result = $number1 / $number2;
            }
            break;
    }

    echo "Výsledek: $result";
}
?>