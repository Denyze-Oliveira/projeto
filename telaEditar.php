<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
<head>
    <title>Editar</title>
    <style type="text/css">
        input{
            display: block;
            margin-bottom: 1em;
            padding: 5px
        }
    </style>
</head>
    <body>
        <?php 
            //Recebe os dados a serem editados
            $id = filter_input(INPUT_POST, 'id');
            $nome = filter_input(INPUT_POST, 'nome');
            $quantidade = filter_input(INPUT_POST, 'quantidade');
            $dataValidade = filter_input(INPUT_POST, 'dataValidade');
            $valor = filter_input(INPUT_POST, 'valor');
        ?>
    <center> 
        <h2>Alteração de dados</h2>
        <form action="telaSalvar.php" method="post">
            
            <!-- Jogamos os valores a serem editados dentro dos inputs no campo value -->
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="text" name="nome" value="<?php echo $nome; ?>">
            <input type="number" name="quantidade" value="<?php echo $quantidade; ?>">
            <input type="date" name="dataValidade" value="<?php echo $dataValidade; ?>">
            <input type="number" name="valor" value="<?php echo $valor; ?>">
            <input type="submit" value="Salvar">
        </form>
    </center>
    </body>
</html>
<footer class="footer mt-auto py-3">
      <div class="container">
        <span class="text-muted"></span>
      </div>
    </footer>
</html>