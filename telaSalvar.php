<?php 
// incluindo a autenticacao
include "autenticacaoBD.php";

    //Recebe os dados com as alterações feitas
    $id = filter_input(INPUT_POST, 'id');
    $novoNome = filter_input(INPUT_POST, 'nome');
    $novoQuantidade = filter_input(INPUT_POST, 'quantidade');
    $novodata = filter_input(INPUT_POST, 'dataValidade');
    $novoValor = filter_input(INPUT_POST, 'valor');

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
    
    //Executa a atualização no banco de dados
    $sql = "UPDATE feirah SET nome='" . $novoNome . "', quantidade='" . $novoQuantidade . "', dataValidade='" . $novodata . "', valor='" . $novoValor . "' WHERE id=".$id;
    $update = mysqli_query($conn, $sql);

    //Se não deu certo, redireciona pra telaEstoque.php com alteracao igual a false
    if( !$update ){
        header("Location:telaEstoque.php?alteracao=false");
        exit;
    }

    //se tudo deu certo, redireciona pra telaEstoque.php com alteracao igual a true
    header("Location:telaEstoque.php?alteracao=true");
?>