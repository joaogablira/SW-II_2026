<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
</head>
<body>
    <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $ano = date('Y');
        $nascimento = $ano - $idade;
        

        
        // echo $nome;
    
    ?>    

    <p>O nome é: <?php echo $nome; ?></p>
    <p>O email é: <?php echo $email; ?></p>
    <p>A idade é: <?php echo $idade; ?></p>
    <p>O seu nome de nascimento é: <?php echo $nascimento; ?></p>
    <?php if ($idade >= 18) {
            echo "<p style= 'color: red'> Você é maior de idade</p>";
        }else{
            echo "<p style= 'color: blue'> Você é menor de idade</p>";
        }

        echo"LISTA DE CLIENTES";
        // laço de repetição
        echo "<ul>";

        for ($i=1;$i <= $idade; $i++) { 
            echo "<li>Cliente $i</li>";
        }
    ?>
    <!---<p>LISTA DE CLIENTES</p>--->
        <!-- <ul>
            <li>Cliente 1</li>
            <li>Cliente 1</li>
            <li>Cliente 1</li>
        </ul> -->
</body>
</html>