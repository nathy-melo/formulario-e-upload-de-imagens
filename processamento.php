<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Recebidos</title>
</head>
<body>
    <h2>Dados Recebidos</h2>
    <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $pais = $_POST['pais'];
        $promo = $_POST['promo'];
        $interesses = isset($_POST['interesses']) ? $_POST['interesses'] : array();

        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Idade:</strong> $idade</p>";
        echo "<p><strong>País:</strong> $pais</p>";
        echo "<p><strong>Quer receber promoção:</strong> $promo</p>";
        if (!empty($interesses)) {
            echo "<p><strong>Interesses:</strong> " . implode(", ", $interesses) . "</p>";
        } else {
            echo "<p><strong>Interesses:</strong> Nenhum interesse selecionado</p>";
        }
        
    ?>
</body>
</html>