<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
</head>
<style>
    input[type=text],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    /* estilo base para os dois botões */
    input[type=submit],
    input[type=reset] {
        width: 48%;
        /* ficam lado a lado */
        color: white;
        padding: 14px 20px;
        margin: 8px 1%;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        display: inline-block;
    }

    /* cor do botão Enviar */
    input[type=submit] {
        background-color: #4CAF50;
    }

    /* cor do botão Limpar */
    input[type=reset] {
        background-color: #f44336;
    }

    /* efeito hover */
    input[type=submit]:hover,
    input[type=reset]:hover {
        opacity: 0.9;
    }

    form {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>

<body>
    <h1> Cadastro de Aluno </h1>
    <form method="post" action="cadastrocurso.php">
        <label for="aluno">Nome</label>
        <input type="text" id="aluno" name="aluno"><br>
        <label for="curso">Cursos</label><br>
        <select name="curso" id="curso">
            <option value="informatica">Informática</option>
            <option value="programador">Programador</option>
            <option value="designer">Designer</option>
        </select>
        <input type="reset" value="Limpar" name="limpar">
        <input type="submit" value="Enviar" name="submit" />
    </form>
</body>

</html>