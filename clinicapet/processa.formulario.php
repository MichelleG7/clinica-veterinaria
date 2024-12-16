<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Animal</title>
</head>
<body>
    <h1>Cadastro de Animal</h1>
    <form action="processa.formulario.php" method="POST">
        <label for="nome">Nome do Animal:</label>
        <input type="text" name="nome" id="nome" required><br><br>

        <label for="especie">Espécie:</label>
        <input type="text" name="especie" id="especie" required><br><br>

        <label for="raca">Raça:</label>
        <input type="text" name="raca" id="raca"><br><br>

        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade" required><br><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
