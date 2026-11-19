<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo PHP</title>
    <!-- Link do CSS -->
     <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <h1>Aprendendo PHP</h1>
        <p>Primeiros passos com programação PHP</p>
    </header>


    <main>      

        <div class="card">          
            <h2>Primeiro contato com PHP</h2>

            <?php
                echo "Olá Turma!"; 
            ?>


        </div>

        <div class="card">
            <h2>Variáveis</h2>

            <?php 
            // Variável do tipo (string) texto
            $nome = "Juliana";

            // Variável do tipo Integer (número inteiro)
            $idade = 20;

            // Variável do tipo float (número decimal)
            $altura = 1.75;

            ?>

            <p>Nome:  <strong><?= $nome ?></strong></p>
            <p>Idade: <strong><?= $idade ?> Anos </strong></p>
            <p>Altura: <strong><?= $altura ?> metros</strong></p>
        </div>

        <div class="card">
            <h2>Operações matemáticas</h2>
            
            <?php 
            $numero1 = 10;
            $numero2 = 20;

            $soma = $numero1 + $numero2;

            $subtracao = $numero1 - $numero2;

            $multiplicacao = $numero1 * $numero2;

            $divisao = $numero1 / $numero2;
            
            ?>

            <p>Soma: <strong><?= $soma ?></strong></p>
            <p>Subtração: <strong><?= $subtracao ?></strong></p>
            <p>Multiplicação: <strong><?= $multiplicacao ?></strong></p>
            <p>Divisão: <strong><?= $divisao ?></strong></p>

            <p></p>


        </div>


    </main>




    
</body>
</html>