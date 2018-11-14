<!DOCTYPE html>
<html lang="en">

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
          <a class="navbar-brand" href="#"> <font color="black"><b>Relatório</b></font> </a>
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
        <h3 class="card-title">Relatório total de vendas: </h3>
        <?php
  // incluindo a autenticacao
include "autenticacaoBD.php";

mysqli_select_db($conn, "venda"); //código para capturar a tabela posts

$result = mysqli_query($conn, 'SELECT `valorV`, `reg_date` FROM `venda` WHERE 1');
$somaTotal = 0;
// É aqui que os dados serão exibidos. O primeiro IF verifica que a tabela contém mais de uma linha (se não está vazia)
if (mysqli_num_rows($result) > 0) {
    // O While vai funcionar pegando todas as linhas da tabela, até que não existam mais linhas.
    while($row = mysqli_fetch_assoc($result)) {
        //A variável $row é um array associativo, que representa uma linha da coluna. A cada iteração do While ele recebe os dados da linha selecionada. Os índices do array associativo são os nomes das colunas.
        $somaTotal += $row['valorV'];
        
	}
} else {
    echo "A tabela Registro está vazia";
}
mysqli_close($conn);

echo "<b>Valor total das vendas: </B>" . $somaTotal. "<br>"; 
?>    

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
