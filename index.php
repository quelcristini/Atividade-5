<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 05</title>
    <html>

    <head>
        <title>Cálculo de Área de Triângulo</title>
        <link rel="stylesheet" href="style.css">
    </head>

<body>
    <h1>Cálculo de Área de Triângulo</h1>
    <form action="index.php" method="post">
        <label for="base">Base:</label>
        <input type="number" id="base" name="base"><br><br>
        <label for="altura">Altura:</label>
        <input type="number" id="altura" name="altura"><br><br>
        <input type="submit" value="Calcular">
    </form>
    <div id="resultado"></div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = $_POST['base'];
        $altura = $_POST['altura'];
        $area = ($base * $altura) / 2;
        $limite = 100;
        if ($area > $limite) {
            echo "<h1>A área do triângulo é $area, que é maior que $limite.</h1>";
        } else {
            echo "<h1>A área do triângulo é $area, que é menor ou igual a $limite.</h1>";
        }
    }
    ?>
</body>

</html>