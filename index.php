<!DOCTYPE html>
<html>
<head>
    <title>Jednoduchá kalkulačka v PHP</title>
</head>
<body>
    <h2>Jednoduchá kalkulačka</h2>
    <form method="post">
        Číslo 1: <input type="text" name="number1" /><br><br>
        Číslo 2: <input type="text" name="number2" /><br><br>
        Operace: 
        <select name="operation">
            <option value="add">Sčítání</option>
            <option value="subtract">Odčítání</option>
            <option value="multiply">Násobení</option>
            <option value="divide">Dělení</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Vypočítej" />
    </form>

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
</body>
</html>
