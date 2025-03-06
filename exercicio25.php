<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Exercicio 24</title>
</head>
 
<body>
 <h1>Pesquisa entre os habitantes</h1>
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

          
            ?>
        </textarea>
    </div>
    <button class="btn btn-primary"><a style="color:#000;text-decoration: none;" href="menu.php" >Voltar</a></button>            
 
 
</body>
</html>
 