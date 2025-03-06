<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Exercicio 28</title>
</head>
 
<body>
 <h1>Volume de uma lata de óleo</h1>
    <?php include('funcoes.php')
    ?>
   
    <form class ="form-control" method ="POST">

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Raio:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero1" placeholder="Digite o raio">
        </div>
        
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Altura:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numero2" placeholder="Digite a altura">
        </div>

        <br><br>
        <button type="submit" class="btn btn-primary">Calcular
            <?php
            //coletando os numeros dos campos
            
                if (isset($_POST['numero1']) && $_POST['numero1'] != "" && isset($_POST['numero1']) && $_POST['numero1'] != "") {

                    $num1 = $_POST['numero1'];
                    $num2 = $_POST['numero2'];
                }
                
               
            
            ?>
        </button>
        <br><br>
    </form>
 
    <div class="form-control">
        <label for="exampleFormControlTextarea1" class="form-label">Resultado:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" readonly>
            <?php

            echo exercicio29($num1,$num2);
            ?>
        </textarea>
    </div>
    <button class="btn btn-primary"><a style="color:#000;text-decoration: none;" href="menu.php" >Voltar</a></button>            
 
 
</body>
</html>
 