<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 3</title>
</head>
<body>
    <?php
        $n = ($_GET['n']) ;
        
        if($n > 0) {
            for ($i = 0; $i < $n; $i++) {
                echo "<p>Programação para Internet</p>";
            }
        } else {
            echo "<p>Informe um valor válido para 'n' na URL (ex: ?n=3)</p>";
        }
    ?>
</body>
</html>