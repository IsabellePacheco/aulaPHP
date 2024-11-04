<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dias da Semana</title>
</head>
<body>
    <h1>ESCOLHA UM DIA DA SEMANA:</h1>
    <h4>APENAS NÚMEROS DE 1-7</h4>
    <form method="POST">
        <input type="number" name="dia" placeholder="Digite um número">
        <button type="submit"> Enviar </button>
    </form>
    <?php
    if (isset($_POST['dia'])){
    $dia = $_POST['dia'];

    switch($dia) {
    case 1:
        echo "domingo";
        break;
    case 2:
        echo "segunda-feira";
        break;
    case 3:
        echo "terça-feira";
        break;
    case 4:
        echo "quarta-feira";
        break;
    case 5:
         echo "quinta-feira";
         break;
    case 6:
        echo "sexta-feira";
        break;
    case 7:
        echo "sábado";
        break;
    default:
        echo "escolha um número de 1 a 7";
        break;       
            }
        }
    ?>
</body>
</html>