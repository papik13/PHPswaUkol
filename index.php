<!DOCTYPE html>
<html>
<head>
    <title>Jednoduchá kalkulačka v PHP</title>
    <link  rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="calculator-container">
        <h2>Jednoduchá kalkulačka</h2>
        <form method="post">
            <input type="text" name="number1" placeholder="Číslo 1"/><br><br>
            <input type="text" name="number2" placeholder="Číslo 2"/><br><br>
            <select name="operation">
                <option value="add">Sčítání</option>
                <option value="subtract">Odčítání</option>
                <option value="multiply">Násobení</option>
                <option value="divide">Dělení</option>
            </select>
            <br><br>
            <input type="submit" name="submit" value="Vypočítej" />
        </form>
    </div>
    <?php include_once("script.php");?>
</body>
</html>
