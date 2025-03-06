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
    <?php include('funcoes.php')?>
   
    <form class ="form-control" method ="POST">

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Primeiro Habitante</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero1" placeholder="Digite o nome do habitante">
        </div>
        
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Salário</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero2" placeholder="Digite o salário">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Filhos</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero3" placeholder="Digite a quantidade de filhos">
        </div><br><br>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Segundo Habitante</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero4" placeholder="Digite o nome do habitante">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Salário</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero5" placeholder="Digite o salário">
        </div>
        
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Filhos</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero6" placeholder="Digite a quantidade de filhos">
        </div><br><br>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Terceiro Habitante</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero7" placeholder="Digite o nome do habitante">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Salário</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero8" placeholder="Digite o salário">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Filhos</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero9" placeholder="Digite a quantidade de filhos">
        </div>

        <br><br>
        <button type="submit" class="btn btn-primary">Calcular
            <?php
            //coletando os numeros dos campos
            if (isset($_POST['numero1']) && $_POST['numero1'] != "" && isset($_POST['numero2']) && $_POST['numero2'] != ""  && isset($_POST['numero3']) && $_POST['numero3'] != "" && isset($_POST['numero4']) && $_POST['numero4'] != "" && isset($_POST['numero5']) && $_POST['numero5'] != "" && isset($_POST['numero6']) && $_POST['numero6'] != "" && isset($_POST['numero7']) && $_POST['numero7'] != "" && isset($_POST['numero8']) && $_POST['numero8'] != "" && isset($_POST['numero9']) && $_POST['numero9'] != "") {

                $num1 = $_POST['numero1'];
                $num2 = $_POST['numero2'];
                $num3 = $_POST['numero3'];

                $num4 = $_POST['numero4'];
                $num5 = $_POST['numero5'];
                $num6 = $_POST['numero6'];

                $num7 = $_POST['numero7'];
                $num8 = $_POST['numero8'];
                $num9 = $_POST['numero9'];
            }
                
            
            ?>
        </button>
        <br><br>
    </form>
 
    <div class="form-control">
        <label for="exampleFormControlTextarea1" class="form-label">Resultado:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" readonly>
            <?php

        echo "\nMédia salarial da população " . calcularmedia($num2,$num5,$num8);
        echo "\nMédia de filhos " . calcularmedia($num3,$num6,$num9);
        echo "\nMaior salário da população " . exercicio25($num2,$num5,$num8);
          
            ?>
        </textarea>
    </div>
    <button class="btn btn-primary"><a style="color:#000;text-decoration: none;" href="menu.php" >Voltar</a></button>            
 
 
</body>
</html>
 