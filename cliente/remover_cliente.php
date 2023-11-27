<?php 
    include_once('/xampp/htdocs/concessionariaVW/connection.php');
    $id = $_POST['id'];
    $sql = "DELETE FROM tb_cliente WHERE id = '$id'";
   
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL: ".mysqli_connect_error();
    }
    mysqli_query($conn,$sql);
    echo "<center><h2>Dados do Cliente deletado com sucesso!</h2></center>";
?>
<center><h2><a href="select_cliente.php">Voltar</a></h2></center>