
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Exercicio 7</title>
</head>
 
<body>
    <h1>Votos brancos, nulos e válidos</h1>
    
    <?php
    include('funcoes.php');
    $resultado = '';

    if (isset($_POST['brancos']) && isset($_POST['validos']) && isset($_POST['nulos']) && isset($_POST['eleitores'])) {
        $tBrancos = $_POST['brancos'];
        $tValidos = $_POST['validos'];
        $tNulos = $_POST['nulos'];
        $tEleitores = $_POST['eleitores'];


        $resultado = exercicio07($tBrancos, $tValidos, $tNulos, $tEleitores);
    }
?>

    <form class="form-control" method="POST">
        <div class="mb-3">
            <label for="brancos" class="form-label">Votos Brancos:</label>
            <input type="number" class="form-control" id="brancos" name="brancos" placeholder="Digite o número de votos brancos" required>
        </div>
        
        <div class="mb-3">
            <label for="validos" class="form-label">Votos Válidos:</label>
            <input type="number" class="form-control" id="validos" name="validos" placeholder="Digite o número de votos válidos" required>
        </div>

        <div class="mb-3">
            <label for="nulos" class="form-label">Votos Nulos:</label>
            <input type="number" class="form-control" id="nulos" name="nulos" placeholder="Digite o número de votos nulos" required>
        </div>

        <div class="mb-3">
            <label for="eleitores" class="form-label">Total de Eleitores:</label>
            <input type="number" class="form-control" id="eleitores" name="eleitores" placeholder="Digite o total de eleitores" required>
        </div>

        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
    
    <br><br>

    <div class="form-control">
        <label for="resultado" class="form-label">Resultado:</label>
        <textarea class="form-control" id="resultado" rows="10" readonly>
            <?php echo $resultado; ?>
        </textarea>
    </div>

    <br><br>
    <button class="btn btn-primary"><a style="color:#000;text-decoration: none;" href="menu.php">Voltar</a></button>            
</body>
</html>
