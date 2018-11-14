<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sou Feirante</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">

  </head>

  

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-warning  bg-warning  fixed-top">
      <div class="container">
          <a class="navbar-brand" href="#"><font color='black'><b>Cadastrando Frutas</b></font></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
            <h1 class="my-4"><font color='white'><b>Vendas</b></font></h1>
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
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  


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
          </div>
         <!-- /.card -->

          <div class="card card-outline-secondary my-4">
            <div class="card-header">
                <b>Cadastrando Fruta</b>
            </div>
              
            <div class="card-body">
                <form method="post" action="telaCadastroS.php">
                
            <b> Fruta: </b>
            <select name="nome">
            <option value="abacate">Abacate</option>
            <option value="abacaxi">Abacaxi</option>
            <option value="acerola">Acerola</option>
             <option value="acai">Açai</option>
            <option value="ameixa">Ameixa</option>
            <option value="amendoa">Amêndoa</option>
             <option value="amora">Amora</option>
            <option value="cacau">Cacau</option>
             <option value="caja">Cajá</option>
            <option value="caju">Cajú</option>
            <option value="caqui">Caqui</option>
             <option value="carambola">Carambola</option>
            <option value="castanha do para">Castanha do pará</option>
            <option value="cereja">Cereja</option>
             <option value="ciriguela">Ciriguela</option>
            <option value="coco">Coco</option>
            <option value="cupuacu">Cupuaçu</option>
             <option value="framboesa">Framboesa</option>
            <option value="goiaba">Goiaba</option>
            <option value="graviola">Graviola</option>
             <option value="grozelha">Grozelha</option>
            <option value="guarana">Guaraná</option>
            <option value="jabuticaba">Jabuticaba</option>
             <option value="jaca">Jaca</option>
            <option value="jambo">Jambo</option>
            <option value="kiwi">Kiwi</option>
             <option value="laranja">Laranja</option>
            <option value="limao">Limão</option>
            <option value="maca">Maça</option>
             <option value="mamao">Mamão</option>
            <option value="manga">Manga</option>
            <option value="maracuja">Maracujá</option>
             <option value="melancia">Melancia</option>
            <option value="melao">Melão</option>
            <option value="morango">Morango</option>
             <option value="pera">Pera</option>
            <option value="pessego">Pessêgo</option>
            <option value="pitanga">Pitanga</option>
             <option value="pitomba">Pitomba</option>
            <option value="ruma">Rumã</option>
            <option value="tangerina">Tangerina</option>
             <option value="umbu">Umbu</option>
             <option value="uva">Uva</option>
        </select>
           <br><br>
              
        <b>Quantidade: </b>
        <input type="number" name="quantidade" max="100" min="0"> 
           
        <b>Validade: </b>
        <input type="date" required="required" name="dataValidade">
        <b>Valor: </b>
        <input type="double" required="required" name="valor" >
        <br>
        <br>
        <br>
        <button type="submit"  class="btn btn-warning btn-lg">Enviar</button>
       </form>
</div>
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->

      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-warning ">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Fruttec 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
