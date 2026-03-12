<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Tabela</title>
</head>
<body>
    <style>
        h1 {
            text-align: center;
        }
        
        table, tr, td, th {
            margin: auto;
            border: 1px solid black;
            text-align: center;
        }
    </style>

    <?php 
        $cor = "#f7d7d7";
        $cor2 = "#9bbccc";
    ?>
    <table>
        <?php 
            for ($linha = 1; $linha <= 8; $linha++){
                echo "<tr style='background-color: $cor;'>";
                for ($coluna = 1; $coluna <= 8; $coluna++) {
                    echo "<td style='background-color: $cor2;'>";
                }
            }
        ?>
    </table>

</body>
</html>