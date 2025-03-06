<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Exercicio 10</title>
</head>
 
<body>
 <h1>Salário total do funcionario</h1>
    <?php include('funcoes.php')
    ?>
   
    <form class ="form-control" method ="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Salário:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="salario" placeholder="Salário do funcionario">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Quantidade de carros vendidos:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="quantidadeCarros" placeholder="Quantidade de carros vendidos">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Comissão:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="comissao" placeholder="Digite a comissa">
        </div>
 
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Total de vendas:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="vendas" placeholder="Total das vendas">
        </div>

        
        <br><br>
        <button type="submit" class="btn btn-primary">Calcular
            <?php
            if (isset($_POST['salario']) && $_POST['salario'] != "" && isset($_POST['quantidadeCarros']) && $_POST['quantidadeCarros'] != ""  && isset($_POST['vendas']) && $_POST['vendas'] != "" && isset($_POST['comissao']) && $_POST['comissao'] != ""){
            $num1 = $_POST['salario'];
            $num2 = $_POST['quantidadeCarros'];
            $num3 = $_POST['vendas'];
            $num4 = $_POST['comissao'];
            }           
            ?>
        </button>
        <br><br>
    </form>
 
    <div class="form-control">
        <label for="exampleFormControlTextarea1" class="form-label">Resultado:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" readonly>
            <?php
               
               echo vendasComissao($num1,$num2,$num3,$num4)
            ?>
        </textarea>
    </div>
    <button class="btn btn-primary"><a style="color:#000;text-decoration: none;" href="menu.php" >Voltar</a></button>            
 
 
</body>
</html>
 