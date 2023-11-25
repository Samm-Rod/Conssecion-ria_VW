<?php
    $id = $_POST['id'];
    $modelo = $_POST['modelo'];
    $cor = $_POST['cor'];
    $valor = $_POST['valor'];

    $sql = "UPDATE tb_veiculo SET modelo='$modelo', cor='$cor',valor='$valor' WHERE id='$id'";
    $con = mysqli_connect("127.0.0.1", "root", "", "db_concessionaria");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    mysqli_query($con, $sql);
    echo "<center><h2>Dados do veículo atualizado com sucesso!</h2></center><p><br>";
    mysqli_close($con);

?>
<center><h2><a href="select_veiculo.php">Voltar</a></h2></center>