<?php 
    // incluindo a autenticacao
        include "autenticacaoBD.php";
        
    //recebe o id dos dados que serão apagados
    $id = filter_input(INPUT_POST, 'id');

    // Criando a conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "12345";
    $dbname = "myFeira";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Verificando a conexão com o banco  de dados
    if (!$conn) {
        die("A conexão com o BD falhou: " . mysqli_connect_error());
    }
    //Executa a query
    $sql = "DELETE FROM feirah WHERE id=".$id;
    $remove = mysqli_query($conn, $sql);
    //Se falhou, redireciona pra telaEstoque.php com remove igual a false 
    if( !$remove ){
        header("Location:telaEstoque.php?remove=false");
        exit;
    }
    //se tudo deu certo, redireciona pra telaEstoque.php com remove igual a true
    header("Location:telaEstoque.php?remocao=true");
?>