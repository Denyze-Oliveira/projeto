
<!doctype html>
<html lang="pt-br" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>HouseFest | Cadastro Realizado como Sucesso</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="https://getbootstrap.com.br/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="https://getbootstrap.com.br/docs/4.1/examples/sticky-footer/sticky-footer.css" rel="stylesheet">
  </head>
<?php
  // incluindo a autenticacao
include "autenticacaoBD.php";

// Coletar os dados digitadosm pelo usuário
$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];

mysqli_select_db($conn, "feirah"); //código para capturar a tabela posts

$result = mysqli_query($conn, 'SELECT `id`, `nome`, `quantidade`, `dataValidade`, `valor`, `reg_date` FROM `feirah` WHERE 1');

if (mysqli_affected_rows($conn)) {
    //echo 'Exibindo ' . mysqli_affected_rows($con) . ' registros localizados <br /><br />';
    while ($item = mysqli_fetch_assoc($result)) {
        
        if($nome == $item['nome']){//
            echo $item['quantidade'];//
            if($item['quantidade'] >= $quantidade ){//
                $total = $quantidade * $item['valor'];//
                $sql = "INSERT INTO `venda`(`nome`, `valorV`) VALUES ('$nome','$total')";
                mysqli_query($conn, $sql);//
                $id = $item['id'];//
                $novaQuantidade = $item['quantidade'] - $quantidade;//
                $sql1 = "UPDATE `feirah` SET `quantidade`=$novaQuantidade WHERE $id";//
                mysqli_query($conn, $sql1);//    
            }else{
                echo "Produto não cadastrado ou não possui no estoque!!!!!";
            }  
        }
    }
}

?> 
  
  <body class="d-flex flex-column h-100">

    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
      <div class="container">
        <h1 class="mt-5">Fruta vendida! Valor total da venda: <?php echo $_POST['$total']; ?>  </h1>
        <p> <a href="telaVendas.php">Clique para voltar!</a></p>
      </div>
    </main>

    <footer class="footer mt-auto py-3">
      <div class="container">
        <span class="text-muted"></span>
      </div>
    </footer>
  </body>
</html>

<html>
    <head>
        <meta charset="UTF-8"> 

    </head>
    <body>
<?php
// incluindo a autenticacao
include "autenticacaoBD.php";

// Coletar os dados digitadosm pelo usuário
$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];

// código SQL
$sql = "INSERT INTO venda (nome, quantidade)VALUES ('$nome', '$quantidade')"; 

// Fechando a conexão com o banco de dados
mysqli_close($conn);


?>
        
    </body>
</html>