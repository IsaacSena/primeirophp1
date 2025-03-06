<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Exercicio 23</title>
</head>
 
<body>
 <h1>Reajuste de salário</h1>
    <?php include('funcoes.php')
    ?>
   
    <form class ="form-control" method ="POST">

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Salário:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero1" placeholder="Até três salários minímos">
        </div>
        
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Salário:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero2" placeholder="Até dez salários minímos">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Salário:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero3" placeholder="Até vinte salários minímos">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Salário:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero4" placeholder="Demais funcionários">
        </div>

        <br><br>
        <button type="submit" class="btn btn-primary">Calcular
            <?php
            //coletando os numeros dos campos
            
                
                $num1 = $_POST['numero1'];
                $num2 = $_POST['numero2'];
                $num3 = $_POST['numero3'];
                $num4 = $_POST['numero4'];
            
            ?>
        </button>
        <br><br>
    </form>
 
    <div class="form-control">
        <label for="exampleFormControlTextarea1" class="form-label">Resultado:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" readonly>
            <?php

           $salario_minimo = 1320;
            
            if ($num1 < 3 * $salario_minimo) {
                $reajuste = 0.50;
                echo "\nO reajuste foi de $num1 para: " . $num1 + ($num1 * $reajuste);
            }else{
            echo "Salário acima de 3920";
            }
        
            if ($num2 >= 3 * $salario_minimo && $num2 <= 10 * $salario_minimo) {
                $reajuste = 0.20;
                echo "\nO reajuste foi de $num2 para: " . $num2 + ($num2 * $reajuste);
            }else{
                echo "\nSalário abaixo de 3921 ou acima de 13200";
            }

            if ($num3 >= 10 * $salario_minimo && $num3 <= 20 * $salario_minimo) {
                $reajuste = 0.15;
                echo "\nO reajuste foi de $num3 para: " . $num3 + ($num3 * $reajuste);
            }else{
                echo "\nSalário abaixo de 13201 ou acima de 26400";
            }

            if ($num4 > 26401) {
                $reajuste = 0.10;
                echo "\nO reajuste foi de $num4 para: " . $num4 + ($num4 * $reajuste);
            }else {
                echo "\nSalário abaixo de 26401";
            }
            
            ?>
        </textarea>
    </div>
    <button class="btn btn-primary"><a style="color:#000;text-decoration: none;" href="menu.php" >Voltar</a></button>            
 
 
</body>
</html>
 