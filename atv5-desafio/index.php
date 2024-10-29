<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Verificação dirigir </title>
</head>
<body>
    <h1> Verifique se você pode dirigir </h1>

    <form method="POST">
        <input type="number" name="idade" placeholder="Digite sua idade " require>
        <button type="submit"> Verificar</button>
    </form>

    <?php
    $idade = ($_POST ["idade"]);
        
    if ($idade >= 18 ){
        echo "<p> Pode dirigir </p>";
    } else{
        echo"<p> Não Pode dirigir </p>";
    }
    ?>
</body>
</html>