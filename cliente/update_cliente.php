<?php
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $dNasc = $_POST['dNasc'];
    $cpf = $_POST['cpf'];


    $sql = "UPDATE tb_cliente SET nome='$nome', dNasc='$dNasc', cpf='$cpf' WHERE id='$id'";

    $con = mysqli_connect("127.0.0.1", "root", "", "db_concessionaria");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    mysqli_query($con, $sql);

    echo "<center><h2>Dados do Cliente atualizado com sucesso!</h2></center><p><br>";

    mysqli_close($con);

?>
<center><h2><a href="select_cliente.php">Voltar</a></h2></center>