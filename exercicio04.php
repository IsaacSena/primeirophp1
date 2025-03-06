<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Exercicio 03</title>
</head>
 
<body>
    <h1>Em uma escola, a média final é dada pela média aritmética de três notas.</h1><br>

    <?php include('funcoes.php')
    ?>
   
    <form class ="form-control" method ="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Primeira Nota:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="primeiraNota" placeholder="Primeira Nota">
        </div>
 
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Segunda Nota:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="segundaNota" placeholder="Segunda Nota">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Terceira Nota:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="terceiraNota" placeholder="Terceira Nota">
        </div>
   
 
        <br><br>
        <button type="submit" class="btn btn-primary">Calcular
            <?php
            //coletando os numeros dos campos
            $num1 = $_POST['primeiraNota'];
            $num2 = $_POST['segundaNota'];
            $num3 = $_POST['terceiraNota'];
                ?>
        </button>
        <br><br>
    </form>
 
    <div class="form-control">
        <label for="exampleFormControlTextarea1" class="form-label">Resultado:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" readonly>
            <?php
               
             switch (true) {
                case (calcularmedia($num1,$num2,$num3) >= 0 && calcularmedia($num1,$num2,$num3) <= 4.9):
                    echo "\nAluno em recuperação. Média: " . calcularmedia($num1,$num2,$num3);
                    echo "\nNota necessária para passar é: " . 10 - calcularmedia($num1,$num2,$num3) + 2;
                    break;
                case (calcularmedia($num1,$num2,$num3) >= 5 && calcularmedia($num1,$num2,$num3) <= 6.9):
                    echo "\nAluno em prova final. Média: " . calcularmedia($num1,$num2,$num3);
                    echo "\nNota necessária para passar é: " . 10 - calcularmedia($num1,$num2,$num3);
                    break;
                case (calcularmedia($num1,$num2,$num3) >= 7 && calcularmedia($num1,$num2,$num3) <= 10):
                    echo "\nAluno aprovado! Média: " . calcularmedia($num1,$num2,$num3);
                    break;
                default:
                    echo "Nota inválida!";
            }
             
            ?>
        </textarea>
    </div>
    <button class="btn btn-primary"><a style="color:#000;text-decoration: none;" href="menu.php" >Voltar</a></button>            
 
 
</body>
</html>
 