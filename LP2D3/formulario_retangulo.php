<?php

include 'Retangulo.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de Formulário do retangulo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\styles.css">
</head>
<body>
    <div class="container">
        <h3>Preencha os Dados</h3>
        <form method="post">
            <div class="form-group">
                <label for="marca">Largura:</label>
                <input type="text" class="form-control" id="largura" name="largura" required>
            </div>
            <div class="form-group">
                <label for="modelo">Altura:</label>
                <input type="text" class="form-control" id="altura" name="altura" required>
            </div>
    
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
</div>
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $largura = $_POST["largura"];
    $altura = $_POST["altura"];

    $retangulo = new Retangulo($largura, $altura);

    echo "<h3>Dados Enviados </h3>";
    echo "<p><strong>Área do Retangulo:</strong>".$retangulo->calcular_area()."</p>";
    echo "<p><strong>Perimetro fo retangulo:</strong>" . $retangulo->calcular_perimetro()."</p>";
}