<!DOCTYPE html>
<html lang="en">
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
        }
        table{
            border: 1px solid gray;
            padding: 1em
        }
        td{
            border: 1px solid lightgray;
            font-size: 1em;
            padding: 5px
        }
        button{
            padding: 5px
        }
    </style>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Item - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-warning bg-warning fixed-top">
      <div class="container">
          <a class="navbar-brand" href="#"> <font color="black"><b>Estoque</b></font> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
            <h1 class="my-4"> <font color="white"> ESTOQUE </font></h1>
          <div class="list-group">
              <a href="telaInicial.php" class="list-group-item">Inicio</a>
              <a href="telaCadastro.php" class="list-group-item">Cadastro de frutas</a>
              <a href="telaVendas.php" class="list-group-item">Venda de frutas</a>
              <a href="telaEstoque.php" class="list-group-item">Estoque</a>
              <a href="telaRelatorio.php" class="list-group-item">Relatório</a>   
            </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div class="card mt-4">
            <div class="container mt-3">

<h2>...</h2>
<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://nomeslegais.com/wp-content/uploads/2017/12/nomes-de-frutas.png" alt="Frutas" width="800" height="400">
    </div>
    <div class="carousel-item">
      <img src="https://www.jasminealimentos.com/wp-content/uploads/2017/09/tipos-de-frutas-1.jpg" alt="Frutas" width="800" height="400">
    </div>
    <div class="carousel-item">
      <img src="http://www.ravenna24ore.it/sites/default/files/photos/2017-08-10/frutta-shutterstock252338818.jpg" alt="Frutas" width="800" height="400">
    </div>
      
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</div> 
            <div class="card-body">
              <h3 class="card-title">Frutas em estoque: </h3>

    <?php 
        //Área de notificações

        //Se existe a variável remocao, então
        if( isset($_GET['remocao'])){
            //Se remoção tem true, os dados foram removidos
            if( $_GET['remocao'] == "true" ){
                echo "<p>Os dados foram removidos.</p>";            
            }else{
                echo "<p>Não foi possivel remover os dados.</p>";
            }
        } 
        //Se existe a variável alteração, então
        if( isset($_GET['alteracao']) ){
            //Se alteracao tem true, os dados foram alterados
            if( $_GET['alteracao'] == "true" ){
                echo "<p>Os dados foram alterados.</p>";            
            }else{
                echo "<p>Não foi possivel alterar os dados.</p>";
            }
        } 
        
    ?>
    <table>
        <tr><td>Id</td>
            <td>Nome</td>
            <td>Quantidade</td>
            <td>Data de Validade</td>
            <td>Preço</td>
        </tr>
        <?php 
        // incluindo a autenticacao
        include "autenticacaoBD.php";
        
        $servername = "localhost";
        $username = "root";
        $password = "12345";
        $dbname = "myFeira";
        
        // Criando a conexão com o banco de dados
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Verificando a conexão com o banco  de dados
        if (!$conn) {
            die("A conexão com o BD falhou: " . mysqli_connect_error());
        }
            //Carrega os dados
            $sql = "SELECT * FROM feirah";
            $consulta = mysqli_query($conn, $sql);
            if( !$consulta ){
                echo "Erro ao realizar consulta. Tente outra vez.";
                exit;
            }
            //se tudo deu certo, exibe os dados
            while( $dados = mysqli_fetch_assoc($consulta) ){
                echo "<tr>";
                echo "<td>" .$dados['id']. "</td>";
                echo "<td>" .$dados['nome']. "</td>";
                echo "<td>" .$dados['quantidade']. "</td>";
                echo "<td>" .$dados['dataValidade']. "</td>";
                echo "<td>" .$dados['valor']. "</td>";
                
                // Cria um formulário para enviar os dados para a página de edição 
                // Colocamos os dados dentro input hidden
                echo "<td>";
                echo "<form action='telaEditar.php' method='post'>";
                echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
                echo "<input name='nome' type='hidden' value='" .$dados['nome']. "'>";
                echo "<input name='quantidade' type='hidden' value='" .$dados['quantidade']. "'>";
                echo "<input name='dataValidade' type='hidden' value='" .$dados['dataValidade']. "'>";
                echo "<input name='valor' type='hidden' value='" .$dados['valor']. "'>";
                
                echo "<button>Editar</button>";
                echo "</form>";
                echo "</td>";
                
                // Cria um formulário para remover os dados 
                // Colocamos o id dos dados a serem removidos dentro do input hidden
                echo "<td>";
                echo "<form action='telaExcluir.php' method='post'>";
                echo "<input name='id' type='hidden' value='" .$dados['id']. "'>";
                echo "<button>Remover</button>";
                echo "</form>";
                echo "</td>";

                echo "</tr>";
            }
        ?>
    </table>

            </div>
          </div>
          <!-- /.card -->

          </div>
          <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->

      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-warning">
      <div class="container">
          <p class="m-0 text-center text-dark"> <b>Copyright &copy; Fruttec 2018</b></p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>