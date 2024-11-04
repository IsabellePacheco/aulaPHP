<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bebidas</title>
</head>
<body>
    <h1>ESCOLHA UMA BEBIDA:</h1>
    <h4>1- água; 2- refrigerante; 3- suco;</h4>
    <form method="POST">
        <input type="number" name="bebidas" placeholder="Digite um número">
        <button type="submit"> Enviar </button>
    </form>
    <?php
    if (isset($_POST['dia'])){
    $bebida = $_POST['dia'];
    }
    $bebida = 3;
    switch($bebida) {
        case 1:
            $preço = 2.50;
            $nomebebida = "Água";
            break;
        case 2:
            $preço = 4.00;
            $nomebebida = "Refrigerante";
            break;
        case 3:
            $preço = 3.50;
            $nomebebida = "Suco";
            break;

        default:
        echo "opção invalida";
        exit;       
    }

        echo "<p>Você escolhe: $nomebebida </P>";
        echo " Preço: " .number_format($preço, 2,',');

    ?>
</body>
</html>