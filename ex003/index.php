<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
   <h1>Testes de tipos primitivos</h1>
    <?php 

    /* 0x = hexadecimal 0b = binário 0 = Octal
    $num = 0x1A;
    echo "o valor da variável é $num"
    ?>
    */

    //$v = 300;
    //var_dump($v);

    //$num = (float) 3e2 // 3 x 10(2) coerção
    //$num = 3e2; // 3 x 10(2)
    //echo "$num"

    //$num = (float) "8409";
    //var_dump($num);
    
    //$vet = [6, 2.5, "claudio", 3, false];
    //var_dump($vet);

    class Pessoa {
        private string $nome;
    }
    $p = new Pessoa;
    var_dump($p);

?>

</body>
</html>