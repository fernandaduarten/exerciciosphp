<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>

<body>
    <form action="<php echo $_SERVER[PHP_SELF]; ?>" method="post">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="nome">

        <label for="prova1">Prova 1:</label>
        <input type="number" id="prova1" name="prova1" step="0.5" min="0" max="10" required><br>

        <label for="prova2">Prova 2:</label>
        <input type="number" id="prova2" name="prova2" step="0.5" min="0" max="10" required><br>

        <button type="reset" name="limpar">Limpar</button>
        <button type="submit" name="submit">Enviar</button>


    </form>
    <?php
    echo "<h1>Resultado das Provas</h1>";
    $prova1 = $_POST['prova1'];
    $prova2 = $_POST['prova2'];
    $parcial = $prova1 + $prova2;
    $media = $parcial / 2;

    echo "Parcial das soma das provas: . $parcial <br>";
    echo "Média das provas: $media <br>";

    echo "o Aluno " . $_POST['nome'] . " foi ";

    if ($media >= 7) {
        echo "<strong style='color: green;'>Aprovados</strong><br>";
    } else {
        echo "<strong style='color: red;'>Reprovados</strong><br>";
    }

    ?>
</body>

</html>