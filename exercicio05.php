<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Exercicio 04</title>
</head>
 
<body>
    <h1>Loja de CDs</h1>
    <?php include('funcoes.php')
    ?>
   
    <form class ="form-control" method ="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Escolha entre as cores <br> 1.Verde <br> 2.Azul <br> 3.Amarelo <br> 4.Vermelho</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="nomeCor" placeholder="Escolha um número">
        </div>
 
        <br><br>
        <button type="submit" class="btn btn-primary">Pesquisar Preço
            <?php
            //coletando os numeros dos campos
            if (isset($_POST['nomeCor']) != "") {
                $nomeCor = $_POST['nomeCor'];
            }
            
            
                ?>
        </button>
        <br><br>
    </form>
 
    <div class="form-control">
        <label for="exampleFormControlTextarea1" class="form-label">Resultado:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" readonly>
            <?php
               
               switch (true) {
                case ($nomeCor === ""):
                    echo "Digite o número da cor";
                    break;
                case ($nomeCor == "Verde" || $nomeCor == "1"):
                    echo "A cor " . "verde" . " custa R$10,00";
                    break;
                case ($nomeCor == "Azul" || $nomeCor == "2"):
                        echo "A cor " . "azul" . " custa R$20,00";
                        break;
                case ($nomeCor == "Amarelo" || $nomeCor == "3"):
                    echo "A cor " . "amarelo" . " custa R$30,00";
                    break;
                case ($nomeCor == "Vermelha" || $nomeCor == "4"):
                        echo "A cor " . "vermelha" . " custa R$40,00";
                        break;
                default:
                if($nomeCor != "")
                    echo "Não existe essa cor";
                    break;
               }
               
            ?>
        </textarea>
    </div>
    <button class="btn btn-primary"><a style="color:#000;text-decoration: none;" href="menu.php" >Voltar</a></button>            
 
 
</body>
</html>
 

 