<?php 
    $id = $_POST['id'];

    $sql = "DELETE FROM tb_peca WHERE id = '$id'";
    $con = mysqli_connect("127.0.0.1","root","","db_concessionaria");
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL: ".mysqli_connect_error();
    }
    mysqli_query($con,$sql);
    echo "<center><h2>Dados da peça deletado com sucesso!</h2></center>";
?>
<center><h2><a href="select_peca.php">Voltar</a></h2></center>