


<!-- 1. Escreva uma função que retorne um array com todos os números ímpares únicos em um array. Exemplo:
Entrada: [2, 2, 3, 3, 5, 7, 9, 9, 12]
Retorno: [5, 7]

2. Escreva uma função que receberá uma senha (string), essa função deverá retornar true (boolean)caso os seguintes requisitos sejam atendidos:
- Ao menos 1 letra maiúscula
- Ao menos um caracter especial (@$%#!)
- Não possui duas letras repetidas, ex: aa, bb, bB, cC, Dd
Caso a string passada não se atente a todos os requisitos acima, retornar false.  -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/mcss.css">
</head>

<body>
    <div class="row">
        <div class="col-6">
            <form action="controllers/Controller.php" method="POST">

                <div id="formulario">

                    Add: <input type="number" name="0" placeholder="Digite o numero"><br>
                    Add: <input type="number" name="1" placeholder="Digite o numero"><br>
                    Add: <input type="number" name="2" placeholder="Digite o numero">

                    <button type="button" id="addCampo">
                        +
                    </button>
                </div>

                <input type="submit" class="btn btn-success btn-sm">

            </form>
        </div>
        <div class="col-6">
            <form action="index.php" method="POST">


                Senha: <input type="password" name="senha" placeholder="Digite uma senha segura"><br>

                <input type="submit" class="btn btn-success btn-sm"><br>
                <?php
                $pass = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);
                function senhaValida($senha)
                {
                    return preg_match('/[A-Z]/', $senha) // tem pelo menos uma letra minúscula
                        && preg_match('/[^A-Za-z0-9]/', $senha) // tem pelo menos um caracter especial
                        && !preg_match('/([a-z])\1{1,}/', strtolower($senha)); // não ter caracter repetidos
                }
                var_dump(senhaValida($pass));

                ?>
        </div>
    </div>

</body>


<script>
    var count = 2;
    $("#addCampo").click(function() {
        count++;
        $("#formulario").append(`<br> Add: <input type="number" name="${count}" placeholder="Digite o numero">`);
    });
</script>