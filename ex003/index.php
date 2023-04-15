<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1> 
    <?php
        // 0x = hexadecimal 0b = binário 0 = octal
        //$num = 0x12;
        //print ("O valor da variável é $num");

        //$v = 45.2;
        //var_dump($v);
        //$num = (int) 3e2; // 3 x 10²
        //echo "O valor é $num";
        //var_dump($num);

        //$vet = [6, 2, 9, 3, 5];
        //var_dump($vet);

        //class Pessoa {
        //    private string $nome;
        //}
        //
        //$p = new Pessoa;
        //var_dump($p);
        #Exemplos de interpolação    
        //$nome = "André \u{1F596} ";
        //echo "Bem vindo de volta $nome";
        
        //$sobrenome = 'Neves \u{1F596}';
        //echo "Bem vindo de volta $sobrenome"
        #Exemplo de concatenação com uma constante
        //const ESTADO = "SP";
        //echo "Moro no Estado de " . ESTADO . " desde que nasci.";
        #Exemplo de como mostrar a data direto no echo
        //echo "<blockquote>Estamos no ano de " .date('Y');
        # Sintaxe Heredoc
        $curso ="PHP";
        $ano = date('Y');
        echo <<< FRASE
            Estou estudando
                $curso em $ano
            FRASE;
        

    ?>
</body>
</html>