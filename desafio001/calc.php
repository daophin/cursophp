<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/form.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resuntado do processamento</h1>
    </header>
    <main id="php">
        <?php // $_REQUEST é uma variável global que contém dentro $_GET, $_POST e $_COOKIES
            $numeroAtual = $_GET ["menssage"];
            $anterior = $_GET ["menssage"] - 1;
            $sucessor = $_GET ["menssage"] + 1;
            echo "O valor digitado foi $numeroAtual<br> Antecessor > $anterior<br> Sucessor > $sucessor";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
    </main>
</body>
</html>