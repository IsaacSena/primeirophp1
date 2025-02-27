<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Exercicio 15</title>
</head>
 
<body>
 <h1>Saldo positivo ou negativo</h1>
    <?php include('funcoes.php')
    ?>
   
    <form class ="form-control" method ="POST">

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Número da conta:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="numeroConta" placeholder="Digite o número da conta">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Saldo:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="saldo" placeholder="Digite o saldo">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Débitos á pagar:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="debito" placeholder="Digite os débitos á pagar">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Crédito:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="credito" placeholder="Digite o seu crédito">
        </div>
 
        <br><br>
        <button type="submit" class="btn btn-primary">Calcular
            <?php
            //coletando os numeros dos campos
            if (isset($_POST['saldo']) && isset($_POST['debito']) && isset($_POST['credito']) && isset($_POST['numeroConta']) && $_POST['saldo'] != "" && $_POST['debito'] != "" && $_POST['credito'] != "" && $_POST['numeroConta'] != "") {
                $num1 = $_POST['saldo'];
                $num2 = $_POST['debito'];
                $num3 = $_POST['credito'];
                $num4 = $_POST['numeroConta'];
            }
         
           
            ?>
        </button>
        <br><br>
    </form>
 
    <div class="form-control">
        <label for="exampleFormControlTextarea1" class="form-label">Resultado:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" readonly>
            <?php
               
               echo saldoBancario($num1,$num2,$num3,$num4);

            ?>
        </textarea>
    </div>
    <button class="btn btn-primary"><a style="color:#000;text-decoration: none;" href="menu.php" >Voltar</a></button>            
 
 
</body>
</html>
 