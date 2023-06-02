<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario02</title>
</head>
<body>
    <h3>Digite um número para se mostrar a Tabuada do mesmo até 10</h3>
    <form action="validar.php" method="post">
    <input placeholder="numero" name="numero"><br>
    <button type="submit">Entrar</button>
    </form>

    <?php
$numero = $_GET["numero"];
for(i=0, i<=10, i++);
echo "$numero * i++";

    ?>
    
</body>
</html>